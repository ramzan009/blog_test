<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']

);

if ($connection == false) {
	echo "Не удалось подключиться на сервер!!!";
	echo mysqli_connect_error();
	exit();
}

?>