<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Membuat Form Menggunakan Method POST-->
	<form method="POST" action="hasilkirim.php">
		<!--Tag pembuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Tag pembuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<!--Pembuat tombol untuk mengeksekusi file action hasilkirim.php-->
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>