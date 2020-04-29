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
			<form action="proses-tambah.php" method="post">
			<button class="btn" name="positif" type="submit" >
				SIMPAN HASIL TES
			</button>
			</form>
		</div>
	</section>
	<section id="pertanyaan">
		<div class="tes">
			<center>
			<h1 class="judul">
				Hasil Diagnosa Positif
			</h1>
			<br>
			<label>
				Anda kemungkinan besar terinfeksi oleh COVID-19, Anda diharapkan untuk segera menghubungi rumah sakit terdekat. Diharapkan untuk tidak keluar dari posisi anda sekarang agar tidak menyebabkan penularan covid-19, dan tetap menunggu hingga pihak rumah sakit datang.
			</label>
		</div>
		</center>
	</section>

</body>
</html>