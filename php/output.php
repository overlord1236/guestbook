<?php 

	include_once("db.php");

	$from = 0;
	$records_on_page = 11;
	$result = mysql_query("SELECT * FROM messages ORDER BY id DESC LIMIT $from, $records_on_page");
	$output_string = "";

	$result_array = array();

	class Response{
		public $name;
		public $email;
		public $date;
		public $message;
	}


	if(isset($_POST['getMore'])){

			
			while ($row = mysql_fetch_array($result)) {

				
				$response = new Response;
				$response->name = $row['name'];
				$response->email = $row['email'];
				$response->date = $row['date'];
				$response->message = $row['message'];
				
				$result_array[]=$response;

			}


	}
	mysql_close();
	echo json_encode($result_array);

			
 ?>