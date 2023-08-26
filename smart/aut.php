<?php 
session_start();
define('smart', true);
include("include/db_connect.php");

$user= '';
if (isset($_POST["submit_add"]))
    {

      $error = array();
    
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {

$email = $_POST['input_email'];
$password = $_POST['input_pass'];

$check_user = mysqli_query($mysqli, "SELECT * FROM `admin2` WHERE `email` = '$email' 
AND `pass` = '$password'");

if ( mysqli_num_rows($check_user)>0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
        "pass" => $user['pass'],
        "name" => $user['name'],
        "email" => $user['email'],
        "rights" => $user['rights']
    ];
    header('Location: index.php');

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
}
	 

  } }  

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

<header class="header">
        <div class="container">
            <div class="row justify__content__center">
                <div class="col-6">
                    <h2 class="headre__title">Авторизация</h2>
                </div>
            </div>
        </div>
    </header>

    <section class="reg">
        <div class="container">
            <div class="row justify__content__center">
                <div class="col-5">


                    <p><?PHP echo $error_msg;?></p>


                    <form class="reg__form" enctype="multipart/form-data" method="post">


                        <div class="reg__block">
                            <label class="reg__label" for="">Почта</label>
                            <input class="reg__input" type="email" placeholder="Ваша почта" name="input_email" required>
                        </div>
                        <div class="reg__block">
                            <label class="reg__label" for="">Пароль</label>
                            <input class="reg__input" type="password" placeholder="Ваш пароль" name="input_pass" required>
                        </div>

                        <button class="reg__btn" type="submit" value="Войти" name="submit_add">Войти</button>

                        <a class="nav__btn" href="reg.php">Зарегистрироваться</a></li>
                    </form>

<?php
if(isset($_SESSION['message'])){
    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
}
unset( $_SESSION['message']);
?>

                </div>
            </div>
        </div>
    </section>

    <?php include('include/footer.php'); ?>
    
</body>
</html>