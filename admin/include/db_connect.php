<?php

defined('smart') or die('Доступ запрещён!');

$db_host = "127.0.0.1";
$db_user = "root";
$db_password = "";
$db_database = "smart";

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_database);

if ($mysqli -> connect_error) {
	printf("Соединение не удалось: %s\n", $mysqli -> connect_error);
	exit();
};



?>