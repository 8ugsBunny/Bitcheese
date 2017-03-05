<?php
session_start();
//include("start_session.php");


$_SESSION = array();
if(isset($_COOKIE[session_name()])){//如果cookie有開啟，session產生自己的cookie
	setcookie(session_name(),'',time()-(60*60*24*30), "/");
}
session_destroy();

setcookie("user_id", "", time()-(60*60*24*30), "/");
setcookie("email_address", "", time()-(60*60*24*30), "/");
setcookie("fb_id", "", time()-(60*60*24*30), "/");

//var_dump($_SESSION);
var_dump($_COOKIE);


$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/';
header('Location: ' . $home_url);

?>