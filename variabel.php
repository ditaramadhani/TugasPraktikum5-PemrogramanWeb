<!DOCTYPE html>
<html>
<head>
	<title> Variabel </title>
</head>
<body>
	<!--Deklarasi Script PHP-->
	<?php 
		//inisialisasi variabel
		$nilai_1 = 10;
		$nilai_2 = 3;
		$nilai_3 = 2*$nilai_1 + 8*$nilai_2;

		//menampilkan value dari variabel nilai 3
		echo "nilai = ",$nilai_3;
		echo "<br>";

		//deklarasi variabel yang berisi operasi aritmatika
		$jumlah = $nilai_1 + $nilai_2;

		//menampilkan nilai variabel
		echo "hasil dari $nilai_1 + $nilai_2 adalah : $jumlah";
		echo "<br>";

		//menampilkan kalimat secara langsung
		echo "\" Nama : Pradita Ramadhani Putri\"<br>";
		echo "NPM : 19082010043";
	?>
</body>
</html>