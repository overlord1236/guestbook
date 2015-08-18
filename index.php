<!DOCTYPE html>

<html>
<head>
	<title>Заголовок сайта</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<meta charset="utf-8">
</head>
<body>

	<div class="wrapper" id="wrapper">
		<div class="messageFormWrapper" id="messageFormWrapper">
			<form method="POST" action="php/script.php" id="messageForm">
				<input type="text" name="userName" placeholder="Name" class="input"><br>
				<input type="email" name="email"  placeholder="e-mail" class="input"><br>
				<input type="text" name="homepage"  placeholder="My site" class="input"><br>
				<textarea name="userMessage" id="userMessage"  placeholder="My message" class="input"></textarea><br>
				<!-- <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>"> -->
				<button type="submit" name="send">Send</button>
			</form>
		</div>






		<div class="loadMessages">
			<table>
				<thead>
					<th>
						<tr>
							<td>User name</td>
							<td>E-mail</td>
							<td>Date</td>
							<td>Message</td>
						</tr>
					</th>
				</thead>
				<tbody id="tableBody">

					

					
				</tbody>
				<tr>
						<td colspan="4" id="getMore">Загрузить еще</td>
				

				</tr>
				
			</table>
		</div>





	</div>



</body>
</html>