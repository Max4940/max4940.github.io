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
      	
        $title = $_POST['title'];
        $text = $_POST['text'];
        $data = $_POST['data'];
        $description = $_POST['description'];
    
	$query ="INSERT INTO news ( title, text, data, description ) VALUES ( 
    '".mysqli_real_escape_string($mysqli, $title)."', 
    '".mysqli_real_escape_string($mysqli, $text)."',
    '".mysqli_real_escape_string($mysqli, $data)."', 
    '".mysqli_real_escape_string($mysqli, $description)."'
    )";
 
    $result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
      
    $id = mysqli_insert_id($mysqli);
    
    if (empty($_POST["upload_image"]))
    {        
    include("actions/news_image.php");
    unset($_POST["upload_image"]);           
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
                <h2 class="main__zag">Новость - добавление</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="news.php">Новости</a>
            </div>
        </div>

        <div class="row form__line">
            <div class="col-7">
                <form class="form" enctype="multipart/form-data" method="post">
                    <div class="form-block">
                        <label for="" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Текст</label>
                        <textarea name="text" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Дата</label>
                        <textarea name="data" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Описание для выдачи</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Изображение</label>
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

</body>
</html>