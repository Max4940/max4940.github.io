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
$id = $_GET["id"];

$action = $_GET["action"];
if (isset($action)) {
    switch($action) {
        case 'delete':
            if(file_exists("../uploads_images/".$_GET["image"])) {
                unlink("../uploads_images/".$_GET["image"]);
                $query = "UPDATE product SET image = NULL WHERE id = '$id'";
                $result = mysqli_query($mysqli, $query) or die("Ошибка" . mysqli_error($mysqli));
            }
            break;
    } 
}

$actions = $_GET["actions"];
if (isset($actions)) {
    switch($actions) {
        case 'delete':
            if(file_exists("../uploads_images/".$_GET["icon"])) {
                unlink("../uploads_images/".$_GET["icon"]);
                $query = "UPDATE product SET icon = NULL WHERE id = '$id'";
                $result = mysqli_query($mysqli, $query) or die("Ошибка" . mysqli_error($mysqli));
            }
            break;
    } 
}

if($_POST["submit_add"]) {
    $error = array();
    if(count($error)) {
        $_SESSION['message'] = "<p>".implode('<br/>',$error)."</p>";
    } else {
 
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

        $querynew = " category2='$category2', category3='$category3', category='$category', title='$title', rating='$rating', star1='$star1', star2='$star2', star3='$star3', star4='$star4', star5='$star5', reviews='$reviews', price1='$price1', price2='$price2', discount_interest='$discount_interest', discount_money='$discount_money', description='$description' ";
        
        $update = "UPDATE product SET $querynew WHERE id = '$id'";

        $result = mysqli_query($mysqli, $update) or die("Ошибка" . mysqli_error($mysqli));

        $idd = mysqli_insert_id($mysqli);

        if (empty($_POST["uploads_image"]))
        {        
        include("actions/goods_image.php");
        unset($_POST["uploads_image"]);           
        }  
  
        // if (empty($_POST["uploads_image"]))
        // {        
        // include("actions/goods_image.php");
        // unset($_POST["uploads_image"]);           
        // }  
  
        // if (empty($_POST["galleryimg"]))
        // {        
        // include("actions/upload-gallery.php");
        // unset($_POST["galleryimg"]);           
        // } 
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
                <h2 class="main__zag">Товар - редактирование</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="goods.php">Товары</a>
            </div>
        </div>

        <?php 

        $id = $_GET["id"];

        $sql = "SELECT * FROM `product` WHERE `id` = '$id'";
        $res = $mysqli -> query($sql);

        if ($res -> num_rows === 1) {
            $resPost = $res -> fetch_assoc()
        
    ?>

    <div class="row form_line">
        <div class="col-7">
            <form class="form" enctype="multipart/form-data" method="post">
                <div class="form-block">
                    <label for="" class="form-label">Категория2</label>
                    <input type="text" class="form-control" value="<?= $resPost['category2'] ?>" name="category2">
                </div>
                <div class="form-block">
                    <label for="" class="form-label">Категория3</label>
                    <input type="text" class="form-control" value="<?= $resPost['category3'] ?>" name="category3">
                </div>
                <div class="form-block">
                    <label for="" class="form-label">Категория</label>
                    <input type="text" class="form-control" value="<?= $resPost['category'] ?>" name="category">
                </div>
                <div class="form-block">
                    <label for="" class="form-label">Заголовок</label>
                    <input type="text" class="form-control" value="<?= $resPost['title'] ?>" name="title">
                </div>

                <div class="form-block">
                    <label for="" class="form-label">Рейтинг</label>
                    <input type="text" class="form-control" value="<?= $resPost['rating'] ?>" name="rating">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">star1</label>
                    <input type="text" class="form-control" value="<?= $resPost['star1'] ?>" name="star1">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">star2</label>
                    <input type="text" class="form-control" value="<?= $resPost['star2'] ?>" name="star2">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">star3</label>
                    <input type="text" class="form-control" value="<?= $resPost['star3'] ?>" name="star3">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">star4</label>
                    <input type="text" class="form-control" value="<?= $resPost['star4'] ?>" name="star4">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">star5</label>
                    <input type="text" class="form-control" value="<?= $resPost['star5'] ?>" name="star5">
                </div>    
                <div class="form-block">
                    <label for="" class="form-label">Отзывы</label>
                    <input type="text" class="form-control" value="<?= $resPost['reviews'] ?>" name="reviews">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">price1</label>
                    <input type="text" class="form-control" value="<?= $resPost['price1'] ?>" name="price1">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">price2</label>
                    <input type="text" class="form-control" value="<?= $resPost['price2'] ?>" name="price2">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">discount_interest</label>
                    <input type="text" class="form-control" value="<?= $resPost['discount_interest'] ?>" name="discount_interest">
                </div>                
                <div class="form-block">
                    <label for="" class="form-label">discount_money</label>
                    <input type="text" class="form-control" value="<?= $resPost['discount_money'] ?>" name="discount_money">
                </div>                        
                <div class="form-block">
                    <label for="" class="form-label">Описание для выдачи</label>
                    <input type="text" class="form-control" value="<?= $resPost['description'] ?>" name="description">
                </div>

        <?php
            if  (	(strlen($resPost["image"]) > 0) && (file_exists("../uploads_images/".$resPost["image"]))	)
            {
                $img_pathh = '../uploads_images/'.$resPost["image"];
            echo '
            <label class="form-label" >Картинка<br><br></label>
            <div id="baseimg">
            <img src="'.$img_pathh.'" /> <br>
            <a class="btn" href="goods-edit.php?id='.$resPost["id"].'&image='.$resPost["image"].'&action=delete" >Удалить</a>
            </div>    ';
            }else {  
            echo '
            <label class="form-label" >Добавить файл</label>
            <div id="baseimg-upload">
            <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
            <input class="form-control" type="file" name="upload_image" />
            </div> <br>
            '; }
        ?>

        <br><br>

        <?php
        //     if ((strlen($resPost["icon"]) > 0) && (file_exists("../uploads_images/".$resPost["icon"])))
        //     {
        //     $img_pathh = '../uploads_images/'.$resPost["icon"];
        //     echo '<label class="form-label">Иконка руководителя<br><br></label>
        //     <div id="baseimg">
        //     <img src="'.$img_pathh.'" /> <br>
        //     <a class="btn" href="project-edit.php?id='.$resPost["id"].'&image='.$resPost["icon"].'&actions=delete">Удалить</a>
        //     </div>';
        //     } else {
        //     echo '
        //     <div class="form-block">

        // </div> <br> '; }
        ?>


<div class="row">

<?php 
            
            // $sql = "SELECT * FROM `gallery_goods` WHERE project_id = 'id'";
            // $res = $mysqli -> query($sql);
            
            // if ($res -> num_rows>0) {
            //     while($resArticle = $res -> fetch_assoc()) {
            
                            
            ?>
            <!-- <div class="col-4 main__block">
                <div class="main__border">
                    <img class="main__img" src="../uploads_images/<?= $resArticle['image'] ?>" alt="">
                    <ul>
                        <li class="main__item"><a href="delete/project-gallary.php?id=<?= $resArticle['id'] ?>" class="main__link">Править</a></li>
                    </ul>
                </div>
            </div> -->

            <?php 
        // }}
    ?>

</div>




                
                <input type="submit" id="submit_form" name="submit_add" class="form_btn" value="Добавить">

            </form>
        </div>
    </div>

    <?php  
                }
            ?>

    </div>
</section>

<script src="js/jquery-3.6.0.min.js"></script>   
<script src="js/main.js"></script>   
    
</body>
</html>