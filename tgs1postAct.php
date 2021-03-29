<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<style type="text/css">
		body {
			background-color: #57C5D6;
			font-family: verdana;

		}
	</style>
</body>
</html>
<!--Mendeklarasikan Script PHP-->
<?php
	//untuk mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center>Nama : ".$_POST['nama']."</center><br>";
	echo "<center>Email : ".$_POST['email']."</center><br>";
	
	//memanggil dan memproses file tgs1include.php
	include 'tgs1include.php';
?>