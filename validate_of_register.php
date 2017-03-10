<?php
/*********驗證信箱是否已經註冊*************/

//include_once("start_session.php");
include('config.inc.php');

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$qry = "SELECT email_address FROM bitcheese_user WHERE email_address = :email";
$stmt = $mysqli_conn -> prepare($qry);
$stmt -> bindParam(":email", $email, PDO::PARAM_STR);
$stmt ->execute();

if($stmt -> rowCount() == 0){//此信箱尚未註冊
	echo "ture";
}
else{
	echo 'false';	
}

?>