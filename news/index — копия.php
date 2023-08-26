<?php 
session_start();
define('smart', true);
include("../include/db_connect.php");
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
    <link rel="stylesheet" href="../css/main.css">

</head>
<body>

<?php include('../include/nav.php'); ?>

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
                        <a  class="bread__link" itemprop="item" title="Новости" href="index.php">
                            <span class="bread__title2" itemprop="name">Новости</span>
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
                <h2 class="news__title">Новости</h2>

                <div class="row justify__content__between">

                <?php 
					
					$sql = "SELECT * FROM `news` ORDER BY id desc LIMIT 8";
					$res = $mysqli -> query($sql);
					
					if ($res -> num_rows>0) {
						while($resArticle = $res -> fetch_assoc()) {
					
				?>

                    <a class="col-6 row news__item2 align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/<?= $resArticle['title'] ?>" alt="">
                        <div class="col-9 news__block__rigth2">
                            <h2 class="news__subtitle"><?= $resArticle['title'] ?></h2>
                            <p class="news__text"><?= $resArticle['text'] ?></p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data"><?= $resArticle['data'] ?></h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 row news__item2 align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news1.svg" alt="">
                        <div class="col-9 news__block__rigth2">
                            <h2 class="news__subtitle">Открытие нового магазина</h2>
                            <p class="news__text">Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news2.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Работа в праздничные дни</h2>
                            <p class="news__text">Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news3.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Идейные соображения</h2>
                            <p class="news__text">Идейные соображения высшего порядка, а также семантический разбор внешних противодействий позволяет выполнить важные задания по разработке прогресса профессионального сообщества</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news4.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Показатели успешности социально-экономического развития</h2>
                            <p class="news__text">Принимая во внимание показатели успешности, социально-экономическое развитие играет</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 row news__item2 align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news1.svg" alt="">
                        <div class="col-9 news__block__rigth2">
                            <h2 class="news__subtitle">Открытие нового магазина</h2>
                            <p class="news__text">Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news2.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Работа в праздничные дни</h2>
                            <p class="news__text">Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news3.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Идейные соображения</h2>
                            <p class="news__text">Идейные соображения высшего порядка, а также семантический разбор внешних противодействий позволяет выполнить важные задания по разработке прогресса профессионального сообщества</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                    <a class="col-6 news__item2 row align__items__center" href="new/index.php">
                        <img class="col-3" src="/img/news/news4.svg" alt="">
                        <div class="col-9 news__block__rigth">
                            <h2 class="news__subtitle">Показатели успешности социально-экономического развития</h2>
                            <p class="news__text">Принимая во внимание показатели успешности, социально-экономическое развитие играет</p>
                            <div class="news__bottom row justify__content__between">
                                <button class="news__btn">Подробнее <img class="btn__img" src="../img/btn_news.svg" alt=""></button>
                                <h3 class="news__data">05 июня 2021</h3>
                            </div>
                        </div>
                    </a>

                <?php 
                    }}
                ?>

                </div>

            </div>
        </div>
    </section>

    <?php include('../include/footer.php'); ?>
   
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