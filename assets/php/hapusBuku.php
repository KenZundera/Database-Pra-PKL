<?php
require 'functions.php';
$idbuku = $_GET["idbuku"];

if( hapusBuku($idbuku) > 0 ) {
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = 'buku.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus!');
			document.location.href = 'buku.php';
		</script>";
}

?>