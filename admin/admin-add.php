<?php
   session_start();
   if ($_SESSION['auth_admin'] == "yes_auth") {
    define('smart', true);
    if (isset($_GET["logout"])) {
        unset($_SESSION['auth_admin']);
        header("Location:index.php");
    }
}
   include("include/db_connect.php");

   if ($_POST["submit_add"])
    {

      $error = array();
    
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
      	
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];

        $pass   = md5($_POST["pass"]);
        $pass   = strrev($pass);
        $pass   = strtolower("jfjf73d".$pass."lfkf3874");

    
	$query ="INSERT INTO admin ( login, pass, name ) VALUES ( 
    '".mysqli_real_escape_string($mysqli, $login)."', 
    '".mysqli_real_escape_string($mysqli, $pass)."', 
    '".mysqli_real_escape_string($mysqli, $name)."'
    )";
 
$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
	  
  } }  

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
<?php include("include/nav.php") ?>

<?php $error; ?>

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="main__zag">Админ - добавление</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="admin.php">Админ</a>
            </div>
        </div>

        <div class="row form__line">
            <div class="col-7">
                <form class="form" enctype="multipart/form-data" method="post">
                    <div class="form-block">
                        <label for="" class="form-label">Логин</label>
                        <input type="text" class="form-control" name="login"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Пароль</label>
                        <input type="text" class="form-control" name="pass"/>
                    </div>
                    <div class="form-block">
                        <label for="" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <input type="submit" id="submit_form" name="submit_add" class="form_btn" value="Добавить">

                </form>
            </div>
        </div>

    </div>
</section>
    
</body>
</html>