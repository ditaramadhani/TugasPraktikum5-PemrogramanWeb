<!DOCTYPE html>
<html>
<head>
	<title> Pemrograman PHP dengan Array </title>
</head>
<body>
	<!--Deklarasi Script PHP-->
	<?php
		// Deklarasi Array
		$nama[] = "Pradita ";
		$nama[] = "Ramadhani ";
		$nama[] = "Putri ";

		// Menampilkan Gabungan Array
		echo $nama[1] . $nama[2] . $nama[0];
		echo "<br>";

		//Menghitung Jumlah Elemen Array
		$jum_array = count($nama);
		echo "Jumlah Elemen Array = " .$jum_array;

	?>
</body>
</html>