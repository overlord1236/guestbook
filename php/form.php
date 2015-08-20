<?php 
	


	header("Content-Type: text/html; charset=utf-8");

	include_once("db.php");

	function clear_data($name){
		return htmlspecialchars(strip_tags(trim($name)));
	}
	
	$backurl = "http://ghostbook.ru/";

	$userName = clear_data($_POST['userName']);
	$email = clear_data($_POST['email']);
	$homepage = clear_data($_POST['homepage']);
	$userMessage = clear_data($_POST['userMessage']);
	$date = date("Y.m.d H:i");
	$ip = $_SERVER["REMOTE_ADDR"];
	


	mysql_query("INSERT INTO messages(name, email, site, date, message, ip) 
					  VALUES ('$userName','$email','$homepage','$date','$userMessage', '$ip')
				");
	mysql_close();

	echo 'Note has been added';




 ?>