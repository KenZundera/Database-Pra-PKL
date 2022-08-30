<?php 
require 'functions.php';

if( isset($_POST["tambah"]) ) {
	if( tambahKategori($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'kategori.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'kategori.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Kategori</title>

	<!-- untuk css -->
	<link rel="stylesheet" href="stylingphp.css">
</head>
<body>
	<div class="wrap">
		<header class="cf">
		<ul>
			<li><a href="kategori.php">Kembali</a></li>
			<li><h1>Tambah Data Kategori</h1></li>
			<li><a href="buku.php">Selanjutnya</a></li>
		</ul>
	</header>
	<form action="" method="post">
		<table border="0" cellpadding="10px" cellspacing="0">
			<tr>
				<td><label for="idkategori">ID Kategori : </label></td>
			</tr>
			<tr>
				<td><input type="text" name="idkategori" id="idkategori"></td>
			</tr>
			<tr>
				<td><label for="kategori">Kategori :</label></td>
			</tr>
			<tr>
				<td><input type="text" name="kategori" id="kategori"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah Data!</button></td>
			</tr>
		</table>
	</form>
	</div>
	
</body>
</html>