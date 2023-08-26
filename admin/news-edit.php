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

	$id = $_GET["id"];
	
	$action = $_GET["action"];
	if (isset($action)) {
		switch($action) {
			case 'delete':
				if(file_exists("../uploads_images/".$_GET["image"])) {
					unlink("../uploads_images/".$_GET["image"]);
					$query = "UPDATE news SET image = NULL WHERE id = '$id'";
					$result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
				}
			break;
		}
	}

   if ($_POST["submit_add"])
    {

      $error = array();
    
      if (count($error))
       {           
            $_SESSION['message'] = "<p id='form-error'>".implode('<br />',$error)."</p>";
            
       }else
       {
      	
        $title = $_POST['title'];
        $text = $_POST['text'];
        $data = $_POST['data'];
        $description = $_POST['description'];
    
		$querynew = " title='$title', text='$text', data='$data', description='$description' ";
		
		$update = "UPDATE news SET $querynew WHERE id = '$id'";
 
        $result = mysqli_query($mysqli, $update) or die("Ошибка " . mysqli_error($mysqli)); 



      
      $idd = mysqli_insert_id($mysqli);
      
      
      if (empty($_POST["upload_image"]))
      {        
      include("actions/news_image.php");
      unset($_POST["upload_image"]);           
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
                <h2 class="main__zag">Новость - редактирование</h2>
            </div>

            <div class="col-12">
                <a class="main__btn" href="news.php">Новости</a>
            </div>
        </div>
        
        <?php 
		
		$id = $_GET["id"];
		
		
		$sql="SELECT * FROM `news` WHERE `id` = '$id'";
		$res = $mysqli -> query($sql);
		
		if ($res -> num_rows === 1) {
			
			$resPost = $res -> fetch_assoc()
		
		?>

        <div class="row form__line">
            <div class="col-7">
                <form class="form" enctype="multipart/form-data" method="post">
                    <div class="form-block">
                        <label for="" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" value="<?= $resPost['title'] ?>" name="title"/>
                        <label for="" class="form-label">Текст</label>
                        <textarea name="text" class="form-control" id="" cols="30" rows="10"><?= $resPost['text'] ?></textarea>
                        <label for="" class="form-label">Дата</label>
                        <textarea name="data" class="form-control" id="" cols="30" rows="10"><?= $resPost['data'] ?></textarea>
                    <div class="form-block">
                        <label for="" class="form-label">Описание для выдачи</label>
                        <input type="text" class="form-control" value="<?= $resPost['description'] ?>" name="description"/>
                    </div>
                    </div>

<?php 

if  (	(strlen($resPost["image"]) > 0) && (file_exists("../uploads_images/".$resPost["image"]))	)
{
	$img_pathh = '../uploads_images/'.$resPost["image"];
echo '
<label class="form-label">Картинка<br><br></label>
<div id="baseimg">
<img src="'.$img_pathh.'" /> <br>
<a class="btn" href="news-edit.php?id='.$resPost["id"].'&image='.$resPost["image"].'&action=delete" >Удалить</a>
</div>    ';
}else {  
echo '
<label class="form-label" >Добавить файл</label>
<div id="baseimg-upload">
<input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
<input class="form-control" type="file" name="upload_image" />
</div> <br>
'; } 

?>

<br><br>

                    <input type="submit" id="submit_form" name="submit_add" class="form_btn" value="Добавить">


                </form>
            </div>
        </div>
        
        
        <?php } ?>
        

    </div>
</section>

    
    
</body>
</html>