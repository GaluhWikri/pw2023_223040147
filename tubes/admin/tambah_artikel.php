<?php
require('functions.php');
if(isset($_POST['tambah'])){
// Insert data when the "tambah" button is clicked


    if (tambah_artikel($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
    <link rel="stylesheet" href="/pw2023_223040147/tubes/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
      <h1>Tambah Data Mahasiswa</h1>

      <div class="row">
        <div class="col-md-8">
          <form action="" method="post" enctype="multipart/form-data" class="box-input">
            <div class="mb-3 w-25">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control" name="gambar" maxlength="9" autofocus required>
            </div>
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" name="judul" >
            </div>
            <div class="mb-3">
              <label for="isi" class="form-label">Isi</label>
              <input type="text" class="form-control" name="isi" rows="3" >
            </div>
            <div class="mb-3">
              <label for="kategori" class="form-label">kategori</label>
              <input type="text" class="form-control" name="kategori" rows="3" >
            </div>
            <div class="mb-3">
              <label for="penulis" class="form-label">penulis</label>
              <input type="text" class="form-control" name="penulis" rows="3" >
            </div>
            <div class="mb-3">
              <label for="waktu" class="form-label">waktu</label>
              <input type="text" class="form-control" name="waktu" rows="3" >
            </div>
            <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
