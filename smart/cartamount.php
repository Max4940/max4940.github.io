<?php
$id = $_POST['id_tov'];//получаем id
$price = $_POST['price_tov'];//получаем количество
$col = $_POST['col_tov'];//получаем количество
        
session_start(); //стартуем сессию
$temp = $_SESSION['cart']; //переносим сессию во временную переменную
$temp[$id]=$col; //изменяем количество
$temp[$id]=$price; //изменяем количество
$_SESSION['cart'] = $temp; //сохраняем сессию
?>