<?php 
    require 'functions.php';
    $buku = query ("SELECT * FROM kategori");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Kategori</title>

    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrap">
        <header>
            <ul>
                <li><a href="buku.php">Kembali</a></li>
                <li><h1>Data Kategori Buku</h1></li>
                <li><a href="#">Selanjutnya</a></li>
            </ul>
        </header>
        <a href="tambahKategori.php" class="tambah"><i class="fa-solid fa-plus"></i></a>

    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Kategori</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php $idkategori = 1; ?>
        <?php foreach($buku as $row) {?>
        <tr>
            <td><?= $idkategori; ?></td>
            <td><?= $row ["kategori"]; ?></td>
            <td>
                <a href="ubahKategori.php?idkategori=<?= $row["idkategori"]; ?>">Ubah</a> |
                <a href="hapusKategori.php?idkategori=<?= $row["idkategori"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
        </tr>
        <?php $idkategori++; ?>
	    <?php } ?>
    </table>
    </div>
    
</body>
</html>