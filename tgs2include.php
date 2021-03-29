<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<style type="text/css">
		body {
			background-color: #57C5D6;
			font-family: verdana;
			font-weight: bold;
		}
	</style>
</body>
</html>

<!--Mendeklarasikan script PHP-->
<?php
	//script untuk mengatur zona waktu
	date_default_timezone_set("Asia/Jakarta");

	//menampilkan pada hari apa dan jam berapa dilakukan login
	echo "<center>Anda login pada : ".date("D, m F Y, G:i:s")."</center>";
?>