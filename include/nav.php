<nav class="nav">
        <div class="container">
            <div class="row align__items__center justify__content__between">
                <div class="col-auto row align__items__center ">
                    <div class="nav__rigth">
                    <a href="../../index.php"><img class="nav__logo" src="/img/header/logo.svg" alt=""></a>
                    <ul class="row align__items__center">
                        <li class="nav__phone">+7 (812) 660-50-54</li>
                        <li class="nav__phone">+7 (958) 111-95-03</li>
                        <li class="nav__time">Пн-вс: с 10:00 до 21:00</li>
                    </ul>
                    </div>
                </div>
                <div class="col-auto row align__items__center bgbg">

                    <ul>
                        <li class="nav__item"><form action="">
                        <input class="nav__search" img="/img/1/search-icon.svg" placeholder="search..." type="search">
                        </form></li>
                        <li class="nav__item"><img class="nav__img" src="/img/header/eye.svg" alt=""></li>
                        <li class="nav__item"><img class="nav__img" src="/img/header/like.svg" alt=""></li>
                        <li class="nav__item"><img class="nav__img" src="/img/header/compare.svg" alt=""></li>
                        <li class="nav__item"><a class="btn btn-default btn-lg" href="cart.php"><img class="nav__img" src="/img/header/cart.svg" alt=""><span class="badge basker_kol"></span></a> </li>

<?php
    // if ($_SESSION['user']['rights'] == 'user' || $_SESSION['user']['rigths'] == 'admin'){
        if (isset($_SESSION['user'])){
?> 

<li class="nav__item"><a class="nav__login" href="reg.php">
        <?php
            echo $_SESSION['user']['login'];
        ?>
    </a></li>

    <li class="nav__item"><a class="nav__btn" href="include/logout.php">Выход</a></li>
 
<?php
    }
    else { 
?>

    <li class="nav__item"><a class="nav__btn" href="aut.php">Вход</a></li>

<?php
    }
?>

                </ul>
            </div>

        </div>
    </div>
</nav>

<section class="menu">
    <div class="container">
        <div class="row">
            <div class="menu__rigth ">
                <div class="col-auto ">
                    <div class="menu3 "> <!-- menu__active -->
                        <div class="menu__humburger">
                            <div class="row catalog">
                                <img class="menu__img" src="/img/menu/menu-icon.svg" alt="">
                                <h3 class="burger__btn">Каталог товаров</h3>
                            </div>
                        </div>
                        <ul class="menu__list">
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu1.svg" alt=""><a href="#" class="menu__link">Гироскутеры</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu2.svg" alt=""><a href="#" class="menu__link">Электросамокаты</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu3.svg" alt=""><a href="#" class="menu__link">Моноколеса</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu4.svg" alt=""><a href="#" class="menu__link">Сигвеи и мини-сигвеи</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu5.svg" alt=""><a href="#" class="menu__link">Электроскутеры</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu6.svg" alt=""><a href="#" class="menu__link">Электровелосипеды</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu7.svg" alt=""><a href="#" class="menu__link">Электроскейты</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu8.svg" alt=""><a href="#" class="menu__link">Электромобили</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu9.svg" alt=""><a href="#" class="menu__link">Аксессуары</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu10.svg" alt=""><a href="#" class="menu__link">Умные игрушки</a></li>
                            <li class="row align__items__center"><img class="list__img" src="/img/menu/icons for menu11.svg" alt=""><a href="#" class="menu__link">Smart Watch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify__content__evenly menu__left">
                <div class="col-auto"><a href="" class="menu__item">О компании</a></div>
                <div class="col-auto"><a href="" class="menu__item">Акции</a></div>
                <div class="col-auto"><a href="" class="menu__item">Рассрочка0|0|18</a></div>
                <div class="col-auto"><a href="" class="menu__item">Сервис и гарантия</a></div>
                <div class="col-auto"><a href="" class="menu__item">Опт/дропшиппинг</a></div>
                <div class="col-auto"><a href="../../contacts/index.php" class="menu__item">Контакты</a></div>
            </div>
        </div>
    </div>
</section>



<section class="menu2">
    <div class="container">
        <div class="col-auto row justify__content__between">





                        <div class="menu__item2 row"><img class="menu__img2" src="img/1/home-icon.svg" alt=""><h3>Главная</h3></div>
                        <div class="menu__item2 row"><img class="menu__img2" src="/img/1/menu-icon.svg" alt=""><h3>Главная</h3></div>
                        <div class="menu__item2 row"><img class="menu__img2" src="/img/1/cart-icon.svg" alt=""><h3>Главная</h3></div>
                        <div class="menu__item2 row"><img class="menu__img2" src="/img/1/search-icon2.svg" alt=""><h3>Главная</h3></div>
                        <div class="menu__item2 row"><img class="menu__img2" src="/img/1/more-icon.svg" alt=""><h3>Главная</h3></div>
                    


         
        </div>
    </div>
</section>