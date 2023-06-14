<?php
// require('functions.php');

// $admin = query("SELECT * FROM users ORDER BY id DESC");
// // searching
// if(isset($_POST["cari"])){
//   $admin = cari($_POST["keyword"]);
// }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="/pw2023_223040147/tubes/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">  
        <!-- As a link -->
  <div class="container-fluid bg-transparant">
  <a href="../index.php" class="logo">Society<span>Side</span></a>
  </div>
</nav>

      <h3>Data Admin</h3>

      <a href="tambah_artikel.php" class="btn btn-primary" >Tambah Data Admin</a>
      <!-- Form Search -->
      <form action="" method="postnew " role="search">
        <div class="input-group mt-3 py-2">
          <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Masukan kata kunci" aria-label="Cari" autofocus autocomplete="off">
          <button class="btn btn-light" type="submit" name="cari" id="cari">Cari</button>
        </div>
      </form>
      <div id="search-container">    
          <?php if($users) :  ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>    
            <th scope="col">Action</th>    
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Kategori</th>
            <th scope="col">penulis</th>
            <th scope="col">waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($users as $a) :
          ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td>
              <a href="?id=<?= $a["id"];?>" class="badge text-bg-danger">Hapus</a>
              <a href="?id=<?= $a["id"];?>" class="badge text-bg-warning">Edit</a>
            </td>
            <!-- <td><a href=""><img src="../img/<?= $a['gambar']; ?>" width="200px" alt=""></a></td>
            <td><a href=""><?= $a['judul']; ?></a></td>
            <td><a href=""><?= $a['isi']; ?></a></td>
            <td><a href=""><?= $a['kategori']; ?></a></td>
            <td><a href=""><?= $a['penulis']; ?></a></td>
            <td><a href=""><?= $a['waktu']; ?></a></td> -->
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
    <script src="admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
