<!--Deklarasi Script PHP-->
<?php 
	//mengatur cookies
	setcookie("variable_cookies","ini adalah variabel cookies",time()+60);

	//menampilkan tulisan berupa link
	echo "<a href = cekcookies.php>Cek Cookies</a>";
?>