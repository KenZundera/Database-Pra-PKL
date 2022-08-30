<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Member Perpustakaan</title>
</head>
<body>
    <h1>Data Member Perpustakaan</h1>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'functions.php';
            $query = mysqli_query($conn, "SELECT * FROM member");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['id_member']."</td>";
                echo "<td>".$data['nama_member']."</td>";
                echo "<td>".$data['tempat_lahir']."</td>";
                echo "<td>".$data['tgl_lahir']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>