<?php

include('start_session.php');
include('utf8_header.php');
include('config.inc.php');

//echo $_POST['log_in'];

		$valide = "false";

		
		try{
			
			$email = filter_var($_POST['email_login'], FILTER_VALIDATE_EMAIL);
			$password = hash('sha256', filter_var($_POST['password_login'], FILTER_SANITIZE_STRING));
			//var_dump($_POST);
			
			if(!empty($email) && !empty($password)){
				$qry = "SELECT email_address, user_id FROM bitcheese_user WHERE email_address = :email_address AND password = :password";
				$data = $mysqli_conn->prepare($qry);
				
				$data->bindParam(":email_address", $email, PDO::PARAM_STR);
				$data->bindParam(":password", $password, PDO::PARAM_STR);
				$data->execute();
				
				if($data->rowCount() == 1){//取出的資料有一列符和

					$valide = "true";
					
					$mysqli_conn = null;
					
				}
				else{//帳號或是密碼錯誤
					$valide = "false";
					$mysqli_conn = null;
					
					}
			}

			echo $valide;
			
		}
		catch(Exception $e){
		echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
		catch(PDOException $e){
			echo 'Caught PDO-exception: ',  $e->getMessage(), "\n";
		}
		
	
?>