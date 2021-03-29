<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Membuat Form Menggunakan Method POST-->
	<form method="POST" action="postAct.php">
		<!--Tag pembuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Tag pembuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--Pembuat tombol untuk mengeksekusi file action postAct.php-->
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>