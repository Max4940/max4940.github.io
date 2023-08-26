<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/setka.css">
    <link rel="stylesheet" href="../../css/main.css">

</head>
<body>

<?php include('../include/nav.php'); ?>

    <section class="bread">
        <div class="container">
            <div class="row">
                <div class="col-12" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                    <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <a class="bread__link" rel="nofollow" itemprop="item" title="Главная" href="../index.php">
                        <span class="bread__title1" itemprop="name">Главная<img class="bread__img" src="../../img/news/arows_bread.svg" alt=""/></span>
                        <meta itemprop="position" content="1">
                    </a>
                    </span>

                    <span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                        <a  class="bread__link" itemprop="item" title="Контакты" href="index.php">
                            <span class="bread__title2" itemprop="name">Контакты</span>
                            <meta itemprop="position" content="2">
                        </a>
                    </span>

                </div>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <div class="row contacts__block">
                <h2 class="news__title">Контакты</h2>
                <div class="row justify__content__between bbb">
                    <div class="col-auto contacts__rigth">
                      <ul>
                        <li class="contacts__address">СПб, Ул. Дыбенко д.23 к.1</li>
                        <li class="contacts__phone">+7 (812) 509-23-43</li>
                        <li class="contacts__address">СПб, Пр. Энгельса д.113 к.2</li>
                        <li class="contacts__phone">+7 (812) 509-23-43</li>
                        <li class="contacts__address">СПб, Ул. Ленсовета д.81</li>
                        <li class="contacts__phone">+7 (812) 602-74-02</li>
                        <li class="contacts__address">СПб, ул. Тарасова д.10</li>
                        <li class="contacts__phone phone__bottom">+7 (967) 555-01-06</li>
                        <li class="contacts__mail"><img class="contacts__icon" src="/img/mail.svg" alt=""> smart-tekhnika@gmail.com</li>
                        <li class="contacts__working"><img class="contacts__icon" src="/img/clock.svg" alt="">Режим работы</li>
                        <li class="contacts__time">Пн-вс с 10:00 до 21:00</li>
                      </ul>
                    </div>
                    <!-- <img class="col-auto contacts__img" src="/img/map.svg" alt=""> -->
                    <div id="map-test" class="map2 col-9"></div>
                </div>
            </div>

            <div class="row contacts__block2">
                <h2 class="news__title">Связаться с нами</h2>          
                    <form class="cont__form" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="form__rigth">
                                <div class="cont__block">
                                    <label class="cont__label" for="">Имя</label>
                                    <input class="cont__input" type="text" placeholder="Введите имя" name="input_name" required>
                                </div>
                                <div class="cont__block">
                                    <label class="cont__label" for="">Телефон</label>
                                    <input class="cont__input" type="text" placeholder="Введите номер телефона" name="input_phone" required>
                                </div>
                            </div>
                        <div class="form__left">
                            <div class="cont__block row">
                                <label class="cont__label" for="">Сообщение</label>
                                <input class="cont__massage" type="email" placeholder="Введите сообщение" name="input_massage" required>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <input class="cont__btn" type="submit" value="Отправить" name="submit_add">
                            <p class="check"><input class="checkbox" type="checkbox" name="a" value="1680" checked> Отправляя данную форму вы соглашаетесь с политикой конфиденциальности</p>
                        </div>
                    </form>
            </div>
        </div>
    </section>

    <?php include('../include/footer.php'); ?>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"></script>
    <script src="../js/map.js"></script>
   
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