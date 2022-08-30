<!DOCTYPE html>
<html>
<head>
	<title> Tugas 2</title>
	<style> 
		h1 {
			font-family:serif;
			color:white;
			font-size:45px;
			text-align:left;
		}
		h2{
			font-family:serif;
			color:white;
			text-align:left;
			font-size:18px;
		}
		h3{
			font-family:serif;
			color:white;
			text-align:left;
		}
	</style>
</head>
<body bgcolor='violet'>
	<h1> OUTPUT 2 </h1>
	<h2> Membuat Fungsi Dengan 3 Parameter </h2>
	<h2> Nama: Firdatul A'yuni <br>
		NIM: 210411100144 <br>
		Kelas: PAW D </h2>
<?php
	function Tugas($jumlah, $nama, $hobi){
		for ($i=0; $i < $jumlah; $i++){
			echo("<br>Halo".$nama);
			echo(" Hobi kamu adalah ".$hobi);
		}
	}
	Tugas (3, ' Firda,', 'Menulis');
	Tugas (2, ' Yuni', 'Bernyanyi');
	Tugas (1, ' Adi', 'Membaca');
?>
</body>
</html>

