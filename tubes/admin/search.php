<?php
require './functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM 
                admin 
            WHERE 
                judul LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' 
            ";
$admin = query($query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Results</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rxWgQ64/nXvM9QW/MHsaxO2VPoIOdbKj0B8ZRxT7jcrABPDI6rRgXORqwLN1IpqW" crossorigin="anonymous">
</head>
<body>
<?php if($admin) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>    
        <th scope="col">Action</th>    
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Kategori</th>
        <th scope="col">Penulis</th>
        <th scope="col">Waktu</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach($admin as $a) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td>
          <a href="hapus_admin.php?id=<?= $a["id"];?>" class="badge text-bg-danger">Hapus</a>
          <a href="ubah_admin.php?id=<?= $a["id"];?>" class="badge text-bg-warning">Edit</a>
        </td>
        <td><a href=""><img src="../img/<?= $a['gambar']; ?>" width="200px" alt=""></a></td>
        <td><a href=""><?= $a['judul']; ?></a></td>
        <td><a href=""><?= $a['isi']; ?></a></td>
        <td><a href=""><?= $a['kategori']; ?></a></td>
        <td><a href=""><?= $a['penulis']; ?></a></td>
        <td><a href=""><?= $a['waktu']; ?></a></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else :  ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        DATA TIDAK DITEMUKAN
      </div>
    </div>
  </div>
<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
