<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Buku Perpustakaan</h1>
    <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Buku</th>
            <th>ID Kategori</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Deskripsi</th>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nama Petugas</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php
            require 'assets/php/functions.php';
            $query = mysqli_query($conn, "SELECT buku.idbuku, detail_buku.iddetailbuku, detail_buku.status, kategori.kategori, kategori.idkategori, buku.judul, buku.pengarang, buku.penerbit, buku.deskripsi, detail_peminjaman.tgl_kembali, member.nama_member, member.id_member,
            petugas.nama_petugas, peminjaman.tgl_pinjam
            FROM kategori, buku, detail_buku, detail_peminjaman, member, petugas, peminjaman
            WHERE kategori.idkategori = buku.idkategori 
            AND buku.idbuku = detail_buku.idbuku
            AND detail_buku.iddetailbuku = detail_peminjaman.iddetailbuku
            AND member.id_member = peminjaman.id_member
            AND petugas.idpetugas = peminjaman.idpetugas
            LIMIT 0, 5;");
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$data['idbuku']."</td>";
                echo "<td>".$data['idkategori']."</td>";
                echo "<td>".$data['kategori']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td>".$data['pengarang']."</td>";
                echo "<td>".$data['penerbit']."</td>";
                echo "<td>".$data['deskripsi']."</td>";
                echo "<td>".$data['id_member']."</td>";
                echo "<td>".$data['nama_member']."</td>";
                echo "<td>".$data['nama_petugas']."</td>";
                echo "<td>".$data['tgl_pinjam']."</td>";
                echo "<td>".$data['tgl_kembali']."</td>";
                echo "<td>".$data['status']."</td>";
                echo "<td><a href='ubah.php?"."'>Ubah</a> | <a href='hapus.php?"."'>Hapus</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
