<?php 
require 'functions.php';

$idkategori = $_GET["idkategori"];
$bk = query("SELECT * FROM kategori WHERE idkategori = $idkategori")[0];


if( isset($_POST["ubah"]) ) {
	if( ubahKategori($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'kategori.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'kategori.php';
			  </script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Kategori</title>

	<!-- untuk link css -->
	<link rel="stylesheet" href="stylingphp.css">
</head>
<body>
	<div class="wrap">
		<header class="cf">
			<ul>
				<li><a href="kategori.php">Kembali</a></li>
				<li><h1>Ubah Data Kategori</h1></li>
				<li><a href="buku.php">Selanjutnya</a></li>
			</ul>
		</header>
	
		<form action="" method="post">
        <table border="0px" cellpadding="10px" cellspacing="0">
			<tr>
				<td><label for="idkategori">ID Kategori</label></td>
			</tr>
			<tr>
				<td><input type="text" name="idkategori" id="idkategori" value="<?php echo $bk["idkategori"]; ?>"></td>
			</tr>
            <tr>
                <td><label for="kategori">Kategori</label></td>
			</tr>
			<tr>
                <td><input type="text" name="kategori" id="kategori" value="<?php echo $bk["kategori"]; ?>"></td>
            </tr>
			<tr>
                <td><button type="submit" name="ubah">Ubah Data!</button></td>
            </tr>
        </table>
	</form>
	</div>
	
</body>
</html>