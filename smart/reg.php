<?php 
session_start();
define('smart', true);
include("include/db_connect.php");

$error_mgs = '';
if ($_POST["submit_add"])
    {

      $error = array();
    
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
      	

        $login = $_POST['input_login'];
        $name = $_POST['input_name'];
        $email = $_POST['input_email'];
        $pass = $_POST['input_pass'];
        $password = $_POST['input_password'];

if ($pass == $password) {

	$query ="INSERT INTO `admin2` ( `login`, `pass`, `name`, `email` ) 
    VALUES ( '$login', '$pass', '$name', '$email' )";
 
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 

header('Location: aut.php');

} else {
    $error_msg = 'Логин и пароль не совпадает!';
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
                    <h2 class="headre__title">Регистрация</h2>
                </div>
            </div>
        </div>
    </header>


    <section class="reg">
        <div class="container">
            <div class="row justify__content__center">
                <div class="col-5">


                    <p><?php echo $error_msg; ?></p>


                    <form class="reg__form" enctype="multipart/form-data" method="post">
                        <div class="reg__block">
                            <label class="reg__label" for="">Логин</label>
                            <input class="reg__input" type="text" placeholder="Ваш логин" name="input_login" required>
                        </div>
                        <div class="reg__block">
                            <label class="reg__label" for="">Имя</label>
                            <input class="reg__input" type="text" placeholder="Ваше имя" name="input_name" required>
                        </div>
                        <div class="reg__block">
                            <label class="reg__label" for="">Почта</label>
                            <input class="reg__input" type="email" placeholder="Ваша почта" name="input_email" required>
                        </div>
                        <div class="reg__block">
                            <label class="reg__label" for="">Пароль</label>
                            <input class="reg__input" type="password" placeholder="Ваш пароль" name="input_pass" required>
                        </div>
                        <div class="reg__block">
                            <label class="reg__label" for="">Подтвердите пароль</label>
                            <input class="reg__input" type="password" placeholder="Ваш пароль" name="input_password" required>
                        </div>

                        <input class="reg__btn" type="submit" value="Регистрация" name="submit_add">
                    </form>
                </div>
            </div>
        </div>
    </section>
   
    <?php include('include/footer.php'); ?>
    
</body>
</html>