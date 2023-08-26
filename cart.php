<?php 
session_start();
define('smart', true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include('include/nav.php'); ?>

<?php
if (!isset($_SESSION['cart'])):
?>



<section vbv>
    <div class="container">
        <div class="row">
                <h2>Ваша корзина пуста</h2>

            <?php else :?>
                <div class="container cart23">
            <table class="vvv">
                <tr>
                    <td>id</td>
                    <td>количество</td>
                    <td>Удалить</td>
                </tr>
                <?php $temp=$_SESSION['cart'];
                    foreach($temp as $id=>$kol): ?>
                    <tr id="<?=$id?>">
                            <td>id товара: <?=$id?></td>
                            <td><input type="number" class="count-product" id="<?=$id?>" value="<?=$kol?>"></td>
                            <td><button class="btn btn-default btn-del" id="<?=$id?>">Удалить</button></td>
                        </tr>
                    <?php endforeach; ?>
            </table> 
            </div>         
            <?php endif; ?>     
        </div>
    </div>
</section>




<?php include('include/footer.php'); ?>





<script src="jquery-2.2.3.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    //изменение количества
        $('.count-product').change(function () { //изменение содержимого инпута     
        var col = $(this).val(); //получаем количество
        if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartamount.php',//куда передаем
            data: {col_tov: col, id_tov: id},//данные
            success: function() {//получаем результат
               //тут можно пересчитать сумму
                }
            });
        });
        //удаление товара
        $('.btn-del').click(function () { //клик на кнопку     
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartdel.php',//куда передаем
            data: {id_tov: id},//данные
            success: function(data) {//получаем результат
                    //тут можно пересчитать сумму
                    $('tr#'+id).css('display', 'none');//скрываем строку таблицы
                }
            });
        });
</script>



</body>
</html>