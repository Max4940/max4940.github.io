<?php 

session_start();
define('smart', true);
include("include/db_connect.php");

if($_POST["submit_enter"]) {

    $login = $_POST["input_login"];
    $pass = $_POST["input_pass"];

    if ($login && $pass) {

        // $pass   = md5($pass);
        // $pass   = strrev($pass);
        // $pass   = strtolower("jf".$pass."74");

        $query = "SELECT * FROM admin WHERE login = '$login' AND pass = '$pass'";
        $result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['auth_admin'] = 'yes_auth';
            $_SESSION['auth_admin_login'] = $row["login"];

            header("Location: home.php");
        } else {
            $msgerror = "Не заполенены все данные!";
        }

    } else {
        $msgerror = "Не правильный логин или пароль!";
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

    <section class="forms">
        <div class="container">
            <div class="row justify__content__center">
                <div class="col-7">
                    <form action="" method="post">
                        <div class="form-block">
                            <label class="form-label" for="">Логин</label>
                            <input type="text" class="form-control" name="input_login">
                        </div>
                        <div class="form-block">
                            <label class="form-label" for="">Пароль</label>
                            <input type="password" class="form-control" name="input_pass">
                        </div>
                        <div class="form-block">
                            <input type="submit" name="submit_enter" class="form_btn" value="Авторизоваться" >
                        </div>


                    </form>


                    <?php 
                    
                    if ($msgerror) {
                        echo ' <p>'.$msgerror.'</p> ';
                    }
                    
                    ?>

                </div>
            </div>
        </div>
    </section>
    
</body>
</html>