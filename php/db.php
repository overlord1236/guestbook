<?php 


	$connection = mysql_connect("localhost","root","");
	$db = mysql_select_db("guestbook");
	mysql_set_charset("utf8");
	if (!$connection && !$db) {
		exit(mysql_error());
	}



	abstract class DB{


		private $db;
		private $connection;
		private $charset;

		public function __construct($db, $connection, $charset){
			$this->db = $db;
			$this->connection = $connection;
			$this->charset = $charset;
		}

		abstract public function Select();
		abstract public function Insert();
		abstract public function Connect();


	}

	//mysql_query("SELECT name, email, DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') AS formated_date, message FROM messages ORDER BY id ASC LIMIT $from, $records_on_page");

	class GuestBookDB extends DB{
		

		public function Select(){

			//реализация выборки из  ДБ
			$result = mysql_query("SELECT name, email, DATE_FORMAT(`date`, '%d.%m.%Y %H:%i') AS formated_date, message FROM messages ORDER BY id ASC LIMIT $from, $records_on_page");
			$result_array = array();

			while ($row = mysql_fetch_array($result)) {

				$record = new Record($row['name'],  $row['email'], $row['formated_date'], $row['message']);
				$result_array[]=$record;

			}
			 
			mysql_close();

			return json_encode($result_array);

		}


		public function Insert(){

			//реализация вставки в БД
			
			mysql_query("INSERT INTO messages(name, email, site, date, message, ip) 
					  VALUES ('$userName','$email','$homepage','$date','$userMessage', '$ip')
				");
			mysql_close();

			echo 'Note has been added';

		}

		public function Connect(){

			//реализация подключения к ДБ

		}

	}







 ?>