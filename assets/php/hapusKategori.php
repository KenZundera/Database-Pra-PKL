<?php
require 'functions.php';
$idkategori = $_GET["idkategori"];

if( hapusKategori($idkategori) > 0 ) {
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'kategori.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus!');
			document.location.href = 'kategori.php';
		</script>";
}

?>