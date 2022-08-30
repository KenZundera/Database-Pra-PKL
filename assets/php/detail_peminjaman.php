<?php 
    require 'functions.php';
    $buku = query ("SELECT * FROM detail_peminjaman");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Buku</title>

    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrap">
    <header>
            <ul>
                <li><a href="detail_buku.php">Kembali</a></li>
                <li><h1>Data Detail Peminjaman</h1></li>
                <li><a href="kategori.php">Selanjutnya</a></li>
            </ul>
        </header>
        <a href="tambahBuku.php" class="tambah"><i class="fa-solid fa-plus"></i></a>

    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Buku</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php $idbuku = 1; ?>
        <?php foreach($buku as $row) {?>
        <tr>
            <td><?= $idbuku; ?></td>
            <td><?= $row["kategori"]; ?></td>
            <td><?= $row ["judul"]; ?></td>
            <td><?= $row ["pengarang"]; ?></td>
            <td><?= $row ["penerbit"]; ?></td>
            <td><?= $row ["deskripsi"]; ?></td>
            <td>
                <a href="ubahBuku.php?idbuku=<?= $row["idbuku"]; ?>">Ubah</a> |
                <a href="hapusBuku.php?idbuku=<?= $row["idbuku"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
        </tr>
        <?php $idbuku++; ?>
	    <?php } ?>
    </table>
    </div>
    
</body>
</html>