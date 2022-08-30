<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Detail Peminjaman Perpustakaan</title>
</head>
<body>
    <h1>Data Petugas Perpustakaan Perpustakaan</h1>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Petugas</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'functions.php';
            $query = mysqli_query($conn, "SELECT * FROM petugas");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['idpetugas']."</td>";
                echo "<td>".$data['nama_petugas']."</td>";
                echo "<td>".$data['username']."</td>";
                echo "<td>".$data['password']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>