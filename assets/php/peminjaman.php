<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman Perpustakaan</title>
</head>
<body>
    <h1>Data Peminjaman Perpustakaan</h1>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Peminjaman</th>
            <th>ID Petugas</th>
            <th>ID Member</th>
            <th>Tanggal Pinjam</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'functions.php';
            $query = mysqli_query($conn, "SELECT * FROM peminjaman");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['idpeminjaman']."</td>";
                echo "<td>".$data['idpetugas']."</td>";
                echo "<td>".$data['id_member']."</td>";
                echo "<td>".$data['tgl_pinjam']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>