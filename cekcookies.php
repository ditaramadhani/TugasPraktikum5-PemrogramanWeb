<!--Deklarasi Script PHP-->
<?php  
	//logika selection
	if (isset($variable_cookies)) {
			//menampilkan variabel cookies dan nilainya jika telah diterapkan
			echo 'Variable cookiesnya "$variable_cookies" nilainya adalah'.$variable_cookies;} 
		else {
			//menampilkan kalimat keterangan jika variabel cookies dan nilainya belum diterapkan
			echo 'Variabel cookies belum diterapkan';}

?>