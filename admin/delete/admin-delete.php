<?php

	session_start(); 
	define('smart', true);
   include("../include/db_connect.php");
  
   
   $id = $_GET['id'];
   
   $query = "DELETE FROM admin WHERE id='$id'";
   
   $result = mysqli_query($mysqli, $query) or die("Ошибка " . mysqli_error($mysqli)); 
   
   mysqli_close($mysqli);
   
   header("Location: {$_SERVER['HTTP_REFERER']}");

?>

