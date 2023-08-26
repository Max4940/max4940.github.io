<?php 
session_start();
define('smart', true);
include("include/db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<?php include('include/nav.php'); ?>

    <section class="bread">
        <div class="container">
            <div class="row">
                <div class="col-12" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a class="bread__link" rel="nofollow" itemprop="item" title="Главная" href="../index.php">
                        <span class="bread__title1" itemprop="name">Главная<img class="bread__img" src="../img/news/arows_bread.svg" alt=""/> </span>
                        <meta itemprop="position" content="1">
                    </a>
                    </span>
                    <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                        <a  class="bread__link" itemprop="item" title="Товары" href="index.php">
                            <span class="bread__title2" itemprop="name">Товары</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row news__block">
                <h2 class="news__title">Товары</h2>

                <div class="row justify__content__between">

                <?php 
					
					$sql = "SELECT * FROM `product` ORDER BY id desc LIMIT 40";
					$res = $mysqli -> query($sql);
					
					if ($res -> num_rows>0) {
						while($resArticle = $res -> fetch_assoc()) {
					
				?>

                    <a class="col-3 product__item" href="product.php">

                        <img class="product__img" src="/uploads_images/<?= $resArticle['image'] ?>" alt="">
                        <div class="product__category2"><?= $resArticle['category2'] ?></div>
                        <div class="product__category3"><?= $resArticle['category3'] ?></div>
                        <h3 class="product__category"><?= $resArticle['category'] ?></h3>
                        <h2 class="product__title"><?= $resArticle['title'] ?></h2>
                        <div class="rating">
                            <img class="star" src="/uploads_images/<?= $resArticle['star1'] ?>" alt="">
                            <img class="star" src="/uploads_images/<?= $resArticle['star2'] ?>" alt="">
                            <img class="star" src="/uploads_images/<?= $resArticle['star3'] ?>" alt="">
                            <img class="star" src="/uploads_images/<?= $resArticle['star4'] ?>" alt="">
                            <img class="star" src="/uploads_images/<?= $resArticle['star5'] ?>" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews"><?= $resArticle['reviews'] ?></span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1"><?= $resArticle['price1'] ?> ₽</h4>
                                <h3 class="price2"><?= $resArticle['price2'] ?> ₽</h3>
                                <div class="row discount align__items__center">
                                    <div class="discount__white"><?= $resArticle['discount_interest'] ?>%</div>
                                    <div class="discount__oringe">- <?= $resArticle['discount_money'] ?> ₽</div>
                                </div>
                            </div>
                            <div>
                                <img class="icon icon_first" src="/img/2/like.svg" alt="">
                                <img class="icon" src="/img/2/compare.svg" alt="">
                            </div>
                        </div>
                        
                        <div class="product__bottom">                    
                            <button class="product__btn" href="#">Купить в 1 клик</button>
                            <img class="product__btn2" src="/img/2/cart.svg" alt="">
                        </div>

                    </a>

                    <?php 
						}}
					?>

                </div>

            </div>
        </div>
    </section>

    <?php include('include/footer.php'); ?>
   
    <script>
        const humburger = document.querySelector('.menu__humburger');
        if (humburger){
            humburger.addEventListener('click', function(event){
                event.target.closest('.menu3').classList.toggle('menu__active');
            });
        }
    </script>

</body>
</html>