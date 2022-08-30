<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "perpustakaan");

	
function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function hapusBuku ($idbuku) {
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE idbuku = $idbuku");

	return mysqli_affected_rows($conn);
}

function hapusKategori($idkategori) {
	global $conn;
	mysqli_query($conn, "DELETE FROM kategori WHERE idkategori = $idkategori");

	return mysqli_affected_rows($conn);
}

function tambahBuku($data) {
	global $conn;

	$idkategori = htmlspecialchars($data["idkategori"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

	$sql = "INSERT INTO buku
			VALUES ('', '$idkategori', '$judul', '$pengarang', '$penerbit', '$deskripsi')";

	
	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function tambahKategori($data) {
	global $conn;

	$kategori = htmlspecialchars($data["kategori"]);
	
	$sql = "INSERT INTO kategori
			VALUES
			('', '$kategori')";
            

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function ubahBuku ($data) {
	global $conn;

	$idbuku = $data["idbuku"];
	$idkategori = htmlspecialchars($data["idkategori"]);
	$judul = htmlspecialchars($data["judul"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$penerbit = htmlspecialchars($data["penerbit"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);

	$sql = "UPDATE buku SET
				idkategori = '$idkategori',
				judul = '$judul',
				pengarang = '$pengarang',
				penerbit = '$penerbit',
				deskripsi = '$deskripsi'
			WHERE idbuku = $idbuku";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function ubahKategori($data) {
	global $conn;

	$idkategori = $data["idkategori"];
    $kategori = htmlspecialchars($data["kategori"]);

	$sql = "UPDATE kategori SET
				kategori = '$kategori'
			WHERE
				idkategori = $idkategori";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}




?>