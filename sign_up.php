<?php

include('utf8_header.php');
include('config.inc.php');



$sign_up = $_POST['sign_up'];
if(isset($sign_up)){
	
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$mobile = filter_var($_POST['mobileNum'], FILTER_SANITIZE_STRING);
	$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
	$password = hash("sha256", filter_var($_POST['password'], FILTER_SANITIZE_STRING));
	$password_1 = hash("sha256", filter_var($_POST['retype_password'], FILTER_SANITIZE_STRING));//確認密碼
	//var_dump($_POST);
	
	try{
		if(!empty($email) && !empty($password) && !empty($password_1) && $password == $password_1){
			$qry = "SELECT * from bitcheese_user WHERE email_address = :email";//帳號綁定信箱
			$data = $mysqli_conn->prepare($qry);
			$data->bindParam(":email", $email, PDO::PARAM_STR);
			$data->execute();
			if($data->rowCount() == 0){//此信箱尚未註冊，進行註冊
				$qry = "INSERT INTO bitcheese_user(mobile, telephone, name, email_address, password, register_date) VALUES(:mobile, :phone, :name, :email, :password, NOW())";
				$stmt = $mysqli_conn->prepare($qry);
				$stmt->bindParam(":name", $name, PDO::PARAM_STR);
				$stmt->bindParam(":mobile", $mobile, PDO::PARAM_STR);
				$stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
				$stmt->bindParam(":email", $email, PDO::PARAM_STR);
				$stmt->bindParam(":password", $password, PDO::PARAM_STR);
				$stmt->execute();
				
				//grab user_id from DB
				$qry = "SELECT user_id FROM bitcheese_user WHERE email_address = :email";
				$stmt = $mysqli_conn->prepare($qry);
				$stmt->bindParam(":email", $email, PDO::PARAM_STR);
				$stmt->execute();

				//set session and cookie
				if($stmt->rowCount() == 1){
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['email_address'] = $email;
					setcookie('user_id', $row['user_id'], time()+(60*60*24*30), "/");
					setcookie('email_address', $email, time()+(60*60*24*30), "/"); 
				}
				
				$mysqli_conn = null;//關閉資料庫連結
				$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
				header('Location: ' . $home_url);
				exit();
			}
			else{//此帳號已被註冊
				$mysqli_conn = null;
				$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php?error=2';
				header('Location: ' . $home_url);
				exit();	
			}
		}

	}
	catch(Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	catch(PDOException $e){
		echo 'Caught PDO-exception: ',  $e->getMessage(), "\n";
	}
}

?>