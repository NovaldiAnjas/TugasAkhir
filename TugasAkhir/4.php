<?php 
include 'koneksi.php';
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>TES</title>
	<link rel="stylesheet" type="text/css" href="file1.css">
</head>
<body>
	<section id="header">
		<div class="nav">
			<ul>
				<li>
				  <h1>COVID-19</h1>
				</li>
				
			</ul>
			
		</div>
		<div class="teks">
			<h1>COVID TES</h1>
			<a href="index.php"><button class="btn">
				KEMBALI KE BERANDA
			</button></a>
		</div>
	</section>
	<section id="pertanyaan">
		<div class="tes">
			<center>
			<h1 class="judul">
				SILAHKAN JAWAB DENGAN JUJUR
			</h1>
			<br>
			<label>Apakah lingkungan anda berada pada kawasan positif zona merah ?
			</label>
			<br>
			<a href="diagnosis1.php"><button class="btn">
				YA
			</button></a>
			<a href="diagnosis2.php"><button class="btn">
				TIDAK
			</button></a>
			</center>
		</div>
	</section>

</body>
</html>