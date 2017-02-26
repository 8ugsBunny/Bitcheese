<?php
/********************fb註冊/登入********************/
include('start_session.php');
include_once("config.inc.php");
include_once("utf8_header.php");

try{
	var_dump($_POST);
	$id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);//facebook的帳號ID
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);//facebook的email
	$qry ="SELECT fb_id, user_id, email_address from bitcheese_user where fb_id = :id";
	$stmt = $mysqli_conn -> prepare($qry);
	$stmt -> bindParam(":id", $id, PDO::PARAM_STR);
	$stmt -> execute();

	if($stmt -> rowCount() == 0){//此id尚未註冊，FB的ID和FB的email放入Database
		$qry = "INSERT INTO bitcheese_user(fb_id, email_address, register_date) VALUES(:id, :email, NOW())";
		$stmt = $mysqli_conn -> prepare($qry);
		$stmt -> bindParam(":id", $id, PDO::PARAM_STR);
		$stmt -> bindParam(":email", $email, PDO::PARAM_STR);
		$stmt -> execute();

	}
	elseif($stmt -> rowCount() == 1){//此id已註冊，進行登入
		$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		//echo $row['fb_id'] . ", ". $row['email_address'];

		//write in session and cookies
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['fb_id'] = $row['fb_id'];
		$_SESSION['email_address'] = $row['email_address'];
		setcookie('user_id', $row['user_id'], time()+(60*60*24*30));
		setcookie('fb_id', $row['fb_id'], time()+(60*60*24*30)); 
		setcookie('email_address', $row['email_address'], time()+(60*60*24*30));

		var_dump($_SESSION);
		var_dump($_COOKIE);

	}
}

catch(Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
}
catch(PDOException $e){
			echo 'Caught PDO-exception: ',  $e->getMessage(), "\n";
}
?>