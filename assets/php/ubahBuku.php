<?php 
require 'functions.php';

$idbuku = $_GET["idbuku"];
$bk = query("SELECT * FROM buku WHERE idbuku = $idbuku")[0];


if( isset($_POST["ubah"]) ) {
	if( ubahBuku($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'buku.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'buku.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Buku</title>

	<!-- link css -->
	<link rel="stylesheet" href="stylingphp.css">
</head>
<body>
	<div class="wrap">
		<header class="cf">
			<ul>
				<li><a href="buku.php">Kembali</a></li>
				<li><h1>Ubah Data Buku</h1></li>
				<li><a href="kategori.php">Selanjutnya</a></li>
			</ul>
		</header>
	<form action="" method="post">
		<input type="hidden" name="idbuku" value="<?php echo $bk["idbuku"]; ?>">
        <table border="0px" cellpadding="10px" cellspacing="0">
			<tr>
				<td><label for="idkategori">ID Kategori :</label></td>
			</tr>
			<tr>
				<!-- <td><input type="text" name="idkategori" id="idkategori" value="<?php echo $bk["idkategori"]; ?>"></td> -->
				<td>
					<select name="idkategori" id="idkategori">
						<?php $kt = query("SELECT * FROM kategori"); ?>
						<?php foreach( $kt as $k ): ?>
							<option value="<?php echo $k["idkategori"]; ?>" <?php if( $k["idkategori"] == $bk["idkategori"] ) { echo "selected"; } ?>><?php echo $k["kategori"]; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="judul">Judul</label></td>
			</tr>
			<tr>
				<td><input type="text" name="judul" id="judul" value="<?php echo $bk["judul"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="pengarang">Pengarang</label></td>
			</tr>
			<tr>
				<td><input type="text" name="pengarang" id="pengarang" value="<?php echo $bk["pengarang"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="penerbit">Penerbit</label></td>
			</tr>
			<tr>
				<td><input type="text" name="penerbit" id="penerbit" value="<?php echo $bk["penerbit"]; ?>"></td>
			</tr>
			<tr>
				<td><label for="deskripsi">Deskripsi</label></td>
			</tr>
			<tr>
				<td><input type="text" name="deskripsi" id="deskripsi" value="<?php echo $bk["deskripsi"]; ?>"></td>
			</tr>
            
            <tr>
                <td>
                <button type="submit" name="ubah">Ubah Data!</button></td>
            </tr>
        </table>
	</form>
	</div>
	
</body>
</html>