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


	//$record = new Record($row['name'],  $row['email'], $row['formated_date'], $row['message']);



	class Record{


		private $name;
		private $email;
		private $homepage;
		private $message;
		private $date;
		private $ip;


		public function __construct($name, $email, $homepage, $message, $date, $ip)
	    {
	        $this->name = $name;
	        $this->email = $email;
	        $this->homepage = $homepage;
	        $this->message = $message;
	        $this->date = $date;
	        $this->ip = $ip;
	    } 


	    function getName(){
	    	return $this->name;
	    }


	    function getEmail(){
	    	return $this->email;
	    }


	    function getHomepage(){
	    	return $this->homepage;
	    }

	    function getMessage(){
	    	return $this->message;
	    }

	    function getDate(){
	    	return $this->date;
	    }


	    function getIp(){
	    	return $this->ip;
	    }

	}



 ?>