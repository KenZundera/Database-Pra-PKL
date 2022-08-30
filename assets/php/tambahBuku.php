<?php 
require 'functions.php';

if( isset($_POST["tambah"]) ) {
	if( tambahBuku($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'buku.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'buku.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Buku</title>
	
	<!-- untuk css -->
	<link rel="stylesheet" href="stylingphp.css">
</head>
<body>
	<div class="wrap">
		<header class="cf">
			<ul>
				<li><a href="buku.php">Kembali</a></li>
				<li><h1>Tambah Data Buku</h1></li>
				<li><a href="kategori.php">Selanjutnya</a></li>
			</ul>
		</header>
	<form action="" method="post">
	<table border="0" cellpadding="10" cellspacing="0">
			<tr>
				<td><label for="idbuku">ID Buku</label></td>
			</tr>
			<tr>
				<td><input type="text" name="idbuku" id="idbuku"></td>
			</tr>
			<tr>
				<td><label for="idkategori">ID Kategori</label></td>
			</tr>
			<tr>
				<td>
					<select name="idkategori" id="idkategori">
						<?php $kategori = query("SELECT * FROM kategori"); ?>
						<?php foreach( $kategori as $row ) : ?>
							<option value="<?= $row["idkategori"]; ?>"><?= $row["kategori"]; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="judul">Judul</label></td>
			</tr>
			<tr>
				<td><input type="text" name="judul" id="judul"></td>
			</tr>
			<tr>
				<td><label for="pengarang">Pengarang</label></td>
			</tr>
			<tr>
				<td><input type="text" name="pengarang" id="pengarang"></td>
			</tr>
			<tr>
				<td><label for="penerbit">Penerbit</label></td>
			</tr>
				<td><input type="text" name="penerbit" id="penerbit"></td>
			</tr>
			<tr>
				<td><label for="deskripsi">Deskripsi</label></td>
			</tr>
			<tr>
				<td><input type="text" name="deskripsi" id="deskripsi"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah Data!</button></td>
			</tr>
		</table>
	</form>
</body>
</html>