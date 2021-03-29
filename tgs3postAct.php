<!DOCTYPE html>
<html>
<head></head>
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

<!--Deklarasi Script PHP-->
<?php
	//mengambil nilai variabel pada form dan menampilkannya lagi
	echo "<center><h2>Selamat Datang ".$_POST['nama'].", inilah biodata singkat Anda"."</h2></center><br>";
	echo "<center>Nama : ".$_POST['nama']."</center><br>";
	echo "<center>Tempat, Tanggal Lahir : ".$_POST['ttl']."</center><br>";
	echo "<center>Alamat Domisili : ".$_POST['alamat']."</center><br>";
	echo "<center>Alamat Email : ".$_POST['email']."</center><br>";
	echo "<center>No. Whatsapp : ".$_POST['wa']."</center><br>";
	echo "<center>Pekerjaan : ".$_POST['pekerjaan']."</center><br>";
?>