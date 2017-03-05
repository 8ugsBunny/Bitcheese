<?php
session_start();
//用cookie設定session
if(isset($_COOKIE['user_id']) and isset($_COOKIE['email_address']) and isset($_COOKIE['fb_id'])) {

		$_SESSION['user_id'] = $_COOKIE['user_id'];
		$_SESSION['email_address'] = $_COOKIE['email_address'];
		$_SESSION['fb_id'] = $_COOKIE['fb_id'];
		//var_dump($_SESSION);
		
}

?>