<!DOCTYPE html>
<html>
<head>
	<title> Konversi Tipe </title>
</head>
<body>
	<!--Deklarasi Script PHP-->
	<?php
		//inisialisasi variabel
		$a = 300.4;

		//menampilkan value variabel a
		echo $a;
		echo "<br>";

		//mengubah tipe data var a menjadi double
		echo "Tipe Double : ",doubleval($a),"<br>";

		//mengubah tipe data var a menjadi integer
		echo "Tipe Integer : ",intval($a),"<br>";

		//mengubah tipe data var a menjadi String
		echo "Tipe String : ",strval($a);
	?>
</body>
</html>