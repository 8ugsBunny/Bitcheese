<?php

include('start_session.php');
include('utf8_header.php');
include('config.inc.php');

//echo $_POST['log_in'];


if(isset($_POST['log_in'])){
	if(!isset($_SESSION['user_id'])){
		
		try{
	
			$email = filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL);
			$password = hash('sha256', filter_var($_POST['password_login'], FILTER_SANITIZE_STRING));
			var_dump($_POST);
			
			if(!empty($email) && !empty($password)){
				$qry = "SELECT email_address, user_id FROM bitcheese_user WHERE email_address = :email_address AND password = :password";
				$data = $mysqli_conn->prepare($qry);
				
				$data->bindParam(":email_address", $email, PDO::PARAM_STR);
				$data->bindParam(":password", $password, PDO::PARAM_STR);
				$data->execute();
				
				if($data->rowCount() == 1){//取出的資料只有一列
					
					$row = $data->fetch(PDO::FETCH_ASSOC);
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['email_address'] = $row['email_address'];
					
					setcookie('user_id', $row['user_id'], time()+(60*60*24*30), "/");
					setcookie('email_address', $row['email_address'], time()+(60*60*24*30), "/"); 
					
					//echo $_SESSION['email_address'] . ', ' . $_SESSION['user_id'];
					
					$mysqli_conn = null;
					$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
					header('Location: ' . $home_url);
					exit();
					
				}
				else{//帳號或是密碼錯誤
					$mysqli_conn = null;
					$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php?error=1';
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
	
}
?>