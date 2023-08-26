<?php
   session_start();
   if ($_SESSION['auth_admin'] == "yes_auth") {
    define('smart', true);
    if (isset($_GET["logout"])) {
        unset($_SESSION['auth_admin']);
        header("Location:index.php");
    }
}
   include("include/db_connect.php");

   if ($_POST["submit_add"])
    {

      $error = array();
    
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
      	
        $category2 = $_POST['category2'];
        $category3 = $_POST['category3'];
        $category = $_POST['category'];
        $title = $_POST['title'];
        $rating = $_POST['rating'];
        $star1 = $_POST['star1'];
        $star2 = $_POST['star2'];
        $star3 = $_POST['star3'];
        $star4 = $_POST['star4'];
        $star5 = $_POST['star5'];
        $reviews = $_POST['reviews'];
        $price1 = $_POST['price1'];
        $price2 = $_POST['price2'];
        $discount_interest = $_POST['discount_interest'];
        $discount_money = $_POST['discount_money'];
        $description = $_POST['description'];
    
	$query ="INSERT INTO product ( category2, category3, category, title, rating, star1, star2, star3, star4, star5, reviews, price1, price2, discount_interest, discount_money, description ) VALUE (
    '".mysqli_real_escape_string($mysqli, $category2)."', 
    '".mysqli_real_escape_string($mysqli, $category3)."',
    '".mysqli_real_escape_string($mysqli, $category)."', 
    '".mysqli_real_escape_string($mysqli, $title)."',
    '".mysqli_real_escape_string($mysqli, $rating)."',
    '".mysqli_real_escape_string($mysqli, $star1)."', 
    '".mysqli_real_escape_string($mysqli, $star2)."',
    '".mysqli_real_escape_string($mysqli, $star3)."', 
    '".mysqli_real_escape_string($mysqli, $star4)."', 
    '".mysqli_real_escape_string($mysqli, $star5)."',
    '".mysqli_real_escape_string($mysqli, $reviews)."', 
    '".mysqli_real_escape_string($mysqli, $price1)."', 
    '".mysqli_real_escape_string($mysqli, $price2)."',
    '".mysqli_real_escape_string($mysqli, $discount_interest)."', 
    '".mysqli_real_escape_string($mysqli, $discount_money)."',
    '".mysqli_real_escape_string($mysqli, $description)."' 
    )";
 
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
      
      $id = mysqli_insert_id($mysqli);
      
      if (empty($_POST["uploads_image"]))
      {        
      include("actions/goods_image.php");
      unset($_POST["uploads_image"]);           
      }        
    } 
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include("include/nav.php") ?>

<?php $error; ?>

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="main__zag">Товары - добавление</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="goods.php">Товары</a>
            </div>
        </div>

        <div class="row form__line">
            <div class="col-7">
                <form class="form" enctype="multipart/form-data" method="post">

                <div class="form-block">
                        <label for="" class="form-label">category2</label>
                        <input type="text" class="form-control" name="category2"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">category3</label>
                        <input type="text" class="form-control" name="category3"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">category</label>
                        <input type="text" class="form-control" name="category"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">title</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">rating</label>
                        <input type="text" class="form-control" name="rating"/>
                    </div>
                   
                 <div class="form-block">
                        <label for="" class="form-label">star1</label>
                        <input type="text" class="form-control" name="star1"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">star2</label>
                        <input type="text" class="form-control" name="star2"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">star3</label>
                        <input type="text" class="form-control" name="star3"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">star4</label>
                        <input type="text" class="form-control" name="star4"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">star5</label>
                        <input type="text" class="form-control" name="star5"/>
                    </div>

                    <div class="form-block">
                        <label for="" class="form-label">reviews</label>
                        <input type="text" class="form-control" name="reviews"/>
                    </div>

                    <div class="form-block">
                        <label for="" class="form-label">price1</label>
                        <input type="text" class="form-control" name="price1"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">price2</label>
                        <input type="text" class="form-control" name="price2"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">discount_interest </label>
                        <input type="text" class="form-control" name="discount_interest "/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">discount_money</label>
                        <input type="text" class="form-control" name="discount_money"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">description</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>









                    <div class="form-block">
                        <label for="" class="form-label">Изображение товара</label>
                        <div id="baseimg-upload">
                            <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="5000000"/>
                            <input type="file" class="form-control" name="upload_image" />
                        </div>
                    </div>

                    <input type="submit" id="submit_form" name="submit_add" class="form_btn" value="Добавить">

                </form>
            </div>
        </div>

    </div>
</section>

 <script src="js/jquery-3.6.0.min.js"></script>   
 <script src="js/main.js"></script>   
    
</body>
</html>