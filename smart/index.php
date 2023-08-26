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
    <title>Smart</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>

<?php include('include/nav.php'); ?>

<header class="header">
    <div class="container">

        <div class="row justify__content__center">
            <div class="col-6">

                <div class="slideshow-container">

                <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="/img/slider.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="/img/slider2.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="/img/slider3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="/img/slider4.png" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                </div> 

            </div>
        </div>
    </div>
</header>



    <section class="product">
        <div class="container">
            <div class="row news__block justify__content__">

                <h2 class="product__main__title">Хиты продаж <a href="products.php"><button class="news__btn__top">Все товары <img class="btn__img" src="/img/btn_news.svg" alt=""></button></a></h2>

                <div class="row justify__content__between">

                <?php 
					
					$sql = "SELECT * FROM `product` ORDER BY id desc LIMIT 4";
					$res = $mysqli -> query($sql);
					
					if ($res -> num_rows>0) {
						while($resArticle = $res -> fetch_assoc()) {
					
				?>

                    <div class="col-3 product__item" href="product.php">

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
                            <button class="product__btn btn btn-primary btn-buy" id="<?= $resArticle['id'] ?>" href="#">Купить в 1 клик</button>
                            <a href="cart.php"><img class="product__btn2" src="/img/2/cart.svg" alt=""></a>
                        </div>

                    </div>


                    <?php 
						}}
					?>

                </div>
        </div>
    </section>

    <section class="product pr__new">
        <div class="container">
            <div class="row news__block justify__content__">
                <h2 class="product__main__title pr__new">Новинки <button class="news__btn__top">Все товары <img class="btn__img" src="/img/btn_news.svg" alt=""></button></h2>


                <div class="row justify__content__between">

                    <div class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
                            </div>
                            <div>
                                <img class="icon icon_first" src="/img/2/like.svg" alt="">
                                <img class="icon" src="/img/2/compare.svg" alt="">
                            </div>
                        </div>
                        
                        <div class="product__bottom">                    
                            <button class="product__btn btn btn-primary btn-buy" id="Гироскутер Smart Balance Well3333333333333333333 6.5 Хип-Хоп (АКВАЗАЩИТА)677888323423" href="#">Купить в 1 клик</button>
                            <img class="product__btn2" src="/img/2/cart.svg" alt="">
                        </div>
                    </div>

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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
                </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <img class="advertisement" src="/img/4.promos1.svg" alt="">
            </div>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="row news__block justify__content__">
                <h2 class="product__main__title">Сигвеи <button class="news__btn__top">Все товары <img class="btn__img" src="/img/btn_news.svg" alt=""></button></h2>


                <div class="row justify__content__between">

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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
                </div>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="row news__block justify__content__">
                <h2 class="product__main__title">Моноколеса <button class="news__btn__top">Все товары <img class="btn__img" src="/img/btn_news.svg" alt=""></button></h2>


                <div class="row justify__content__between">

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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

                    <a class="col-3 product__item" href="">
                        <img class="product__img" src="/img/2/image 18.svg" alt="">
                        <div class="product__category2">Новинка</div>
                        <div class="product__category3">Хит продаж</div>
                        <h3 class="product__category">Сигвей</h3>
                        <h2 class="product__title">Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)</h2>
                        <div class="rating">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="star" src="/img/2/star.svg" alt="">
                            <img class="reviews2" src="/img/2/message-square.svg" alt="">
                            <span class="reviews">17</span>
                        </div>
                        <div class="row justify__content__between price3">
                            <div class="">
                                <h4 class="price1">5400 ₽</h4>
                                <h3 class="price2">4990 ₽</h3>
                                <img class="discount" src="/img/2/discount.svg" alt="">
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
                </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <img class="advertisement" src="/img/7.promos2.svg" alt="">
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row news__block">
                <h2 class="news__title">Новости <a href="../news/index.php"><button class="news__btn__top">Читать всё <img class="btn__img" src="/img/btn_news.svg" alt=""></button></a></h2>

                <div class="row justify__content__between">

                <?php 
					
					$sql = "SELECT * FROM `news_main` ORDER BY id desc LIMIT 4";
					$res = $mysqli -> query($sql);
					
					if ($res -> num_rows>0) {
						while($resArticle = $res -> fetch_assoc()) {
					
				?>
                
                    <a class="col-3 news__item" href="../news/new/index.php">
                        <h2 class="news__subtitle"><?= $resArticle['title'] ?></h2>
                        <p class="news__text"><?= $resArticle['text'] ?></p>
                        <div class="news__bottom row justify__content__between">
                            <button class="news__btn" href="../news/new/index.php">Подробнее <img class="btn__img" src="/img/btn_news.svg" alt=""></button>
                            <h3 class="news__data"><?= $resArticle['data'] ?></h3>
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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $('.btn-buy').click(function () {//клип на кнопку
        var id = $(this).attr('id'); //получаем id этой кнопки
            $.ajax({//передаем ajax-запросом данные
            type: "POST", //метод передачи данных
            url: '/addtocart.php',//php-файл для обработки данных
            data: {id_tov: id},//передаем наши данные
            success: function(data) {//
                $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
                }
            });
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>
    const humburger = document.querySelector('.menu__humburger');
    if (humburger){
        humburger.addEventListener('click', function(event){
            event.target.closest('.menu3').classList.toggle('menu__active');
        });
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
    $('.btn-buy').click(function () {//клип на кнопку
        var id = $(this).attr('id'); //получаем id этой кнопки
            $.ajax({//передаем ajax-запросом данные
            type: "POST", //метод передачи данных
            url: '/addtocart.php',//php-файл для обработки данных
            data: {id_tov: id},//передаем наши данные
            success: function(data) {//
                $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
                }
            });
    });
</script>

<script src="/js/slider.js"></script>
<!-- <script src="/js/slider__auto.js"></script> -->

<script src="cart/js/jquery-3.2.1.min.js"></script>
<script src="cart/js/main.js"></script> 

<!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
<script src="js/map.js"></script> -->

</body>
</html>