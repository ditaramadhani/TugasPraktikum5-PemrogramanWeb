<!--Deklarasi Script PHP-->
<?php
	//logika selection
	if (empty($_POST['nama'])) {
		//akan menampilkan file kosong.php, apabila tidak ada inputan
		header("Location:kosong.php");
	} else {
		//akan menampilkan nama yang telah diinputkan dengan method post, apabila ada inputan
		echo "<center>Nama:".$_POST['nama']."</center><br>";
	}
	
?>