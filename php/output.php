<?php 

	include_once("db.php");

	


	if(isset($_POST['getRows'])){
		$count = mysql_result(mysql_query("SELECT count(1) FROM messages"), 0);
		echo json_encode($count);
	}



	if(isset($_POST['getMore'])){


			$from = $_POST['from'];
			$records_on_page = $_POST['recordOnPage'];

			class Response{
				public $name;
				public $email;
				public $date;
				public $message;
			}

			$result = mysql_query("SELECT name, email, DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') AS formated_date, message FROM messages ORDER BY id ASC LIMIT $from, $records_on_page");
			$result_array = array();

			while ($row = mysql_fetch_array($result)) {

				
				$response = new Response;
				$response->name = $row['name'];
				$response->email = $row['email'];
				$response->date = $row['formated_date'];
				$response->message = $row['message'];
				$result_array[]=$response;
			}
		echo json_encode($result_array);
	}


	mysql_close();
	

			
