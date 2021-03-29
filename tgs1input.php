<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	
	<style type="text/css">
		body {
			background-color: #57C5D6;
			font-family: verdana;
			font-weight: bold;
		}
	</style>

	<!--Tag pembuat form yang menggunakan method POST-->
	<form method="POST" action="tgs1postAct.php">
		<!--Tag pembuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Tag pembuat cell untuk inputan-->
			<tr>
				<td width="130" >Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<!--Pembuat tombol untuk mengeksekusi file action tgs1postAct.php-->
			<tr>
				<td style="padding: 10px; display: inline-block; position: absolute; ">
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>