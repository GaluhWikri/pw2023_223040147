<?php 
// koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">tambah data mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>nama</th>
        <th>Email</th>
        <th>Jurusan</th>

    </tr>
    <?php $i = 1; ?>
    <?php  foreach( $mahasiswa as $row ): ?>
    <tr>
        <td><?= $i;  ?></td>
        <td> 
            <a href="http://">ubah</a>
            <a href="http://">hapus</a>
        </td>
        <td><img src="" alt="" width="50"></td>
        <td><?= $row["nim"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
    </table>

</body>
</html>