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
	if (empty($_POST['nama'])||empty($_POST['email'])) {
		header("Location:tgs2kosong.php");
	}else{
		//script untuk mengambil nilai variabel pada form dan menampilkannya lagi
		echo "<center>Nama : ".$_POST['nama']."</center><br>";
		echo "<center>Email : ".$_POST['email']."</center><br>";
		
		//script memanggil file action tgs2include.php
		include 'tgs2include.php';
	}
?>
