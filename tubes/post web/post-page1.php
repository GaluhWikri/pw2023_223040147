<?php 
require "../koneksi.php";
$judul = htmlspecialchars($_GET['judul']);
$queryArtikel = mysqli_query($conn, "SELECT * FROM admin WHERE judul ='$judul'");
$admin = mysqli_fetch_assoc($queryArtikel);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page 1</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="/pw2023_223040147/tubes/css/index.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <!-- header -->
    <header>
      <!-- nav -->
      <div class="nav container">
        <!-- logo navbar -->
        <a href="/pw2023_223040147/tubes/" class="logo">GALUH<span>JAYA</span></a>
        <!-- login button -->
        <a href="login.php" class="login">login</a>
      </div>
    </header>

    <?php if($admin) { ?>
    <!-- post content -->
    <section class="post-header">
      <div class="header-content post-container">
        <!-- back to home page -->
        <a href="/pw2023_223040147/tubes" class="back-home">back to home</a>
        <!-- title -->
        <h1 class="header-title"><?php echo $admin['judul']; ?></h1>
        <!-- post image -->
        <img src="../img/<?php echo $admin['gambar']; ?>" class="header-img">
      </div>
    </section>

    <!-- posts -->
    <section class="post-content post-container">
      <h2 class="sub-heading"><?php echo $admin['judul']; ?></h2>
      <p class="post-text"><?php echo $admin['isi']; ?></p>
    </section>

    <?php } else { ?>
    <!-- share -->
    <section class="share post-container">
      <div class="header-content">
        <span class="share-title">Share this article</span>
        <div class="social">
          <a href="http://"><i class='bx bxl-facebook-circle'></i></a>
          <a href="http://"><i class='bx bxl-instagram'></i></a>
          <a href="http://"><i class='bx bxl-youtube'></i></a>
          <a href="http://"><i class='bx bxl-gmail'></i></a>
        </div>
      </div>
    </section>
    <?php } ?>

    <!-- footer -->
    <div class="footer container">
      <p>Galuh wikri ramadhan company</p>
      <div class="social">
      <a href="http://" ><i class='bx bxl-facebook-circle'></i></a>
      <a href="http://" ><i class='bx bxl-instagram'></i></a>
      <a href="http://" ><i class='bx bxl-youtube' ></i></a>
      <a href="http://" ><i class='bx bxl-gmail' ></i></a>
