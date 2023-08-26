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
                <a class="bread__link" rel="nofollow" itemprop="item" title="Главная" href="../../index.php">
                    <span class="bread__title1" itemprop="name">Главная<img class="bread__img" src="../../img/news/arows_bread.svg" alt=""/></span>
                    <meta itemprop="position" content="1">
                </a>
                </span>

                <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a  class="bread__link" itemprop="item" title="Товары" href="../index.php">
                        <span class="bread__title1" itemprop="name">Товары<img class="bread__img" src="../../img/news/arows_bread.svg" alt=""/></span>
                        <meta itemprop="position" content="2">
                    </a>
                </span>

                <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a  class="bread__link" itemprop="item" title="Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)" href="index.php">
                        <span class="bread__title2" itemprop="name">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</span>
                        <meta itemprop="position" content="3">
                    </a>
                </span>

            </div>
        </div>
    </div>
</section>

<section class="product_single">
    <div class="container">
        <div class="row">
            <div class="row col-5">
                <div class="row justify__content__center align__items__center pr__single__left">
                    <img class="product_single__img" src="img/image18.svg" alt="">
                    <div class="row justify__content__center bg">
                        <img class="imgArowsLeft" src="img/product/arrow_left.svg" alt="">
                        <img class="imgGallery" src="img/product/image_product1.png" alt="">
                        <img class="imgGallery" src="img/product/image_product1.png" alt="">
                        <img class="imgGallery" src="img/product/image_product1.png" alt="">
                        <img class="imgArowsRigth" src="img/product/arrow_rigth.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <h2 class="product_single__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>

                <div class="product__rigth">
                    <div class="row align__items__center justify__content__between product__rigth__top">
                        <div class="rating product__rigth_single">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div>
                            <img class="icon icon_first" src="/img/2/like.svg" alt="">
                            <img class="icon" src="/img/2/compare.svg" alt="">
                        </div>
                    </div> 

                    <div class="row align__items__center justify__content__between product__rigth__bottom">
                        <div class="row justify__content__between price3">
                            <div class="">
                                <div class="row align__items__center">
                                    <h4 class="pr__sinlge_price1">5400 ₽</h4>
                                    <img class="pr__single__discount" src="/img/2/discount.svg" alt="">
                                </div>
                                <h3 class="pr__sinlge_price2">4990 ₽</h3>
                            </div>
                               </div>
                        <div class="product__bottom product__single__bottom">  
                            <button class="product__single__btn" href="#">В корзину</button>                  
                            <button class="product__single__btn2" href="#">Купить в 1 клик</button>
                        </div>
                    </div>
                </div>

                <div class="row justify__content__between pr__rigth_bot">
                    <div class="row justify__content__between">
                        <img class="product__rigth_icon" src="/img/product/car.svg" alt="">
                        <div>
                            <h2 class="pr__rigth__title">Доставка</h2>
                            <p class="pr__rigth_text">Доставим по Санкт-Петербургу в течение 2 часов и бесплатно. <br> Стоимость доставки в другие города уточняйте у менеджера.</p>
                        </div>
                    </div>
                    <div class="row justify__content__between">
                        <img class="product__rigth_icon" src="/img/product/purse.svg" alt="">
                        <div>
                            <h2 class="pr__rigth__title">Оплата</h2>
                            <p class="pr__rigth_text">Принимаем к оплате как наличный, так и безналичный <br> расчёт. Возможна >оплата электронными кошельками.</p>
                        </div>
                    </div>
                </div>






        
            </div>
            <div class="col-12 row product__description">

                <div class=" col-12 row product__description__top">
                    <h3 class="paragraph1">Описание</h3>
                    <h3 class="paragraph2">Характеристики</h3>
                    <h3 class="paragraph2">Отзывы (1)</h3>
                </div>
                
                <div class="row col-9">
                    <h2 class="product__description__title">Описание гироскутера Smart Balance Well 6.5</h2>
                    <p class="product__description__text">Вопрос безопасности всегда стоит очень остро, в этом году производители решили его следующим образом — снабдили модель качественной задней и передней подсветкой, поэтому пользователь может не переживать о том, что его будет незаметно на дороге в тёмное время суток. <br><br>  
                    На руле имеется яркий качественный дисплей, где отображается вся актуальная и необходимая информация — скорость, пробег и др. Кроме того, на руле имеется кнопка включения и выключения подсветки, звуковой сигнал и кнопка настроек. Таким образом, все необходимое для управления самокатом находится у пользователя под рукой. <br><br>
                    Для комфорта прогулок электросамокат снабжён передним и задним амортизаторами. Вы можете перемещаться не только по ровному городскому асфальту, но и по неровностям, которые не затруднят ваше перемещение. <br><br> 
                    Складной механизм и небольшой вес (11 кг) делают модель эргономичной. В сложенном виде самокат занимает совсем мало места — его легко перевозить как в багажнике машины, так и в общественном транспорте. При складывании самокат фиксируется с помощью крючка к заднему крылу. А для того, чтобы разложить его, необходимо, нажав на заднее крыло, приподнять руль. Характерный щелчок говорит о том, что самокат разложен полностью и готов к эксплуатации. <br><br> 
                    Стоит отметить, что электросамокат очень быстро стартует — вам не надо отталкиваться или разгоняться. Выдерживает до 120 кг, в процессе изготовления использовались только качественные материалы. <br><br>                   
                    Быстрый, лёгкий, компактный — прекрасный выбор для ценителей удобства!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="news">
    <div class="container">
        <div class="row news__block">
            <h2 class="news__title">Рекомендуем</h2>

            <div class="row justify__content__between">

            <?php 
                
                $sql = "SELECT * FROM `product` ORDER BY id desc LIMIT 4";
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

<script>js/slider.js</script>

</body>
</html>