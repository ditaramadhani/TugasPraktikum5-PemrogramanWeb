<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
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
	<form method="POST" action="tgs3postAct.php">
		<h2 align="center">BIODATA SAYA</h1>
		<!-- Tag pembuat tabel-->
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!--Tag pembuat cell untuk inputan-->
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Alamat Domisili</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="130">Alamat Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">No. Whatsapp</td>
				<td><input type="text" name="wa"></td>
			</tr>
			<tr>
				<td width="130">Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
		</table>
		<!--Pembuat tombol untuk mengeksekusi file action tgs3postAct.php-->
		<p align="center"><input type="submit" name="btnLogin" value="Submit"> <input type="reset" name="reset" value="Reset"></p>
	</form>
</body>
</html>