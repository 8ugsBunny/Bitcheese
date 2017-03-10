<?php
// for PDO
$dsn 				= 'mysql:host=localhost;dbname=vhost110806'; 
$db_username        = 'vhost110806'; //MySql database username
$db_password        = 'cheeseacc1234'; //MySql dataabse password

//connect to MySql							
try{
	$mysqli_conn = new PDO($dsn, $db_username, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
	$mysqli_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
}

?>