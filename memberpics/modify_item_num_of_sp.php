<?php
//購物車增減數量存入SESSION
session_start();
//var_dump($_POST);

if(isset($_POST['item_num']) && isset($_POST['product_code'])){
	$code = filter_var($_POST['product_code'], FILTER_SANITIZE_STRING);
	$num = filter_var($_POST['item_num'], FILTER_VALIDATE_INT);
	$_SESSION["products"][$code]['product_qty'] = $num;
}

//var_dump($_SESSION);	
?>