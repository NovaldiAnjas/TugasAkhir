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
			<button  class="btn" name="negatif" type="submit">
				SIMPAN HASIL TES
			</button></a>
			</form>
		</div>
	</section>
	<section id="pertanyaan">
		<div class="tes">
			<center>
			<h1 class="judul">
				Hasil Diagnosa Negatif
			</h1>
			<br>
			<label>
				Anda kemungkinan besar tidak terinfeksi oleh COVID-19, Namun anda disarankan untuk tetap tinggal dirumah. Infeksi anda mungkin disebabkan virus selain COVID-19, Oleh karena itu anda tidak perlu dites oleh COVID-19. Meskipun demikian, hindarilah keluar rumah jika memungkinkan. Penyakit anda akan sembuh sendiri dengan cukup makan dan istirahat
			</label>
		</div>
		</center>
	</section>

</body>
</html>