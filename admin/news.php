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

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="main__zag">Новости</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="news-add.php">Добавить новость</a>
            </div>

            <?php 
            
            $sql = "SELECT * FROM `news`";
            $res = $mysqli -> query($sql);
            
            if ($res -> num_rows>0) {
                while($resArticle = $res -> fetch_assoc()) {
            
                            
            ?>
            <div class="col-4 main__block">
                <div class="main__border">
                    <img class="main__img" src="../uploads_images/<?= $resArticle['image'] ?>" alt="">
                    <p class="main__title"><?= $resArticle['title'] ?></p>
                    <p class="main__title"><?= $resArticle['text'] ?></p>
                    <p class="main__title"><?= $resArticle['data'] ?></p>
                    <ul>
                        <li class="main__item"><a href="news-edit.php?id=<?= $resArticle['id'] ?>" class="main__link">Править</a></li>
                        <li class="main__item"><a href="delete/news-delete.php?id=<?= $resArticle['id'] ?>" class="main__link">Удалить</a></li>
                    </ul>
                </div>
            </div>
            <?php 
            
        }}
    
    ?>



        </div>
    </div>
</section>

</body>
</html>