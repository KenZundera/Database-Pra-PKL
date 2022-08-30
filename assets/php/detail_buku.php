<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Detail Buku Perpustakaan</title>
</head>
<body>
    <h1>Data Detail Buku Perpustakaan</h1>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Detail Buku</th>
            <th>ID Buku</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'functions.php';
            $query = mysqli_query($conn, "SELECT * FROM detail_buku");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['iddetailbuku']."</td>";
                echo "<td>".$data['idbuku']."</td>";
                echo "<td>".$data['status']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>