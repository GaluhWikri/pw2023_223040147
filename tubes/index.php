<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: index.php");
//     exit;
// }
?>
<?php 
require "koneksi.php";
$queryArtikel = mysqli_query($conn, "SELECT id, gambar, judul, isi, kategori, penulis, waktu FROM admin")
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOCIETY SIDE</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="/pw2023_223040147/tubes/css/index.css">
    <!-- link searh bar -->
    <link rel="stylesheet" href="">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
  <body>
     <!-- carousel -->
 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/CAARAOUSEL1.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="img/CARAOUSEL2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/CARAOSEL3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- header -->
      <header>
    <!--nav -->
        <div class="nav container">
    <!-- logo navbar -->
    <a href="#" class="logo">Society<span>Side</span></a>
<div class="d-flex ">
  <a href="login.php" class="login mx-1">Login</a> <a href="logout.php" class="login">Logout</a></div>
    <!-- login button -->

  </div>
  </header>
  <!-- post filter -->
  <div class="post-filter container">
    <span class="filter-item active-filter" data-filter='all'>All</span>
    <span class="filter-item" data-filter='news'>News</span>
    <span class="filter-item" data-filter='layanan'>Layanan</span>
    <span class="filter-item" data-filter='ragam'>Ragam</span>
  </div>
<!-- posts -->
<section class="post container ">
    <!--post box 1 -->
      <?php while ($data = mysqli_fetch_array($queryArtikel)) { ?>
      <div class="post-box <?php echo $data["kategori"]; ?>">
          <img src="img/<?php echo $data["gambar"]; ?>" alt="" class="post-img">
          <h2 class="category"><?php echo $data["kategori"]; ?></h2>
          <a href="post web/post-page1.php?judul=<?php echo $data['judul']; ?>" class="post-title">
            <?php echo $data["judul"]; ?></a>
          <span class="post-date"><?php echo $data["waktu"]; ?></span>
          <p class="post-description"><?php echo $data["isi"]; ?></p>
          <!-- profile -->
          <div class="profile">
            <img src="img/default.png" alt="" class="profile-img">
            <span class="profile-name"><?php echo $data["penulis"]; ?></span>
          </div>
        </div>
      </div>
    <?php } ?>
</div>
         </section>
 <section class="home"id="home">
  <div class="home-text container">
      <h2 class="home-title">SOCIETY SIDE</h2>
      <span class="home-subtitle">Portal Informasi Society Side</span>
  </div>
</section>

 <!-- footer -->
<div class="footer container">
  <p>Galuh wikri ramadhan company</p>
  <div class="social">
    <a href="http://" ><i class='bx bxl-facebook-circle'></i></a>
    <a href="http://" ><i class='bx bxl-instagram'></i></a>
    <a href="http://" ><i class='bx bxl-youtube' ></i></a>
    <a href="http://" ><i class='bx bxl-gmail' ></i></a>
  </div>
</div>


 <script
 src="https://code.jquery.com/jquery-3.6.4.js"
 integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
 crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="/pw2023_223040147/contoh/script.js"></script>
  </body>
</html>
