<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/pw2023_223040147/tubes2/style.css">
    <link rel="stylesheet" href="boxicons.min.css">

    <title>Hovernment</title>
</head>
<body>

<!-- navbar -->

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md3">
      <div class="container">
      <a href="#" class="navbar-brand">
        <img style="width: 90px ;" src="../tubes/img/240_F_242411439_cpRbIRdRdqOVb94GLZc4jQNgf14voXVG-removebg-preview.png" alt="">
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-target="#navbarnav"
        data-bs-toggle="collapse"
        aria-controls="navbarnav"
        aria-expanded="false"
        aria-label="toggle navbar"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="narbarnav">
          <div class="mx-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link text-light">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light">Berita</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light">Layanan</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-light">Profile</a>
            </li>
            <li class="nav-item">
              <a href="./php/login.php" class="nav-link text-light">sign in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </header>
<!-- navbar end -->
<!-- corousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carousel end -->

<!-- category -->
<div class="category">
<header class="category-head ms-4 mt-5 mb-2 rounded-pill p-3">
        <h1>Cari Berdasarkan Kategori</h1>
      </header>
      <div class="card-category d-flex justify-content-around">
        <!-- category 1 -->
        <div class="category-1 text-center" style="width: 30%">
          <a href="#"><i class="fa-solid fa-tag bg-dark text-light p-2 rounded-pill" style="width: 50px"></i></a>
          <p>PROMO</p>
        </div>
        <!-- category 2 -->
        <div class="category-2 text-center" style="width: 30%">
          <a href="#">
            <i class="fa-sharp fa-solid fa-head-side-cough bg-dark text-light p-2 rounded-pill" style="width: 50px"></i></a>
          <p>FLU & BATUK</p>
        </div>
        <!-- category 3 -->
        <div class="category-3 text-center" style="width: 30%">
          <a href="#"><i class="fa-sharp fa-solid fa-lungs-virus bg-dark text-light p-2 rounded-pill" style="width: 50px"></i></a>
          <p>ASMA &amp; PERNAPASAN</p>
        </div>
        <!-- category 4 -->
        <div class="category-4 text-center" style="width: 30%">
          <a href="#"><i class="fa-solid fa-kit-medical bg-dark text-light p-2 rounded-pill" style="width: 50px"></i></a>
          <p>P3K</p>
        </div>
        <!-- category 5 -->
        <div class="category-5 text-center" style="width: 30%">
          <a href="#"><i class="fa-solid fa-microscope bg-dark text-light p-2 rounded-pill" style="width: 50px"></i></a>
          <p>ALAT KESEHATAN</p>
        </div>
      </div>
</div>
<!-- category end -->

<!-- card item  -->
  <div class="container my- d-grid gap-5 ">
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<!-- card 1 -->
    </div>
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
<!-- card 2 -->
    </div>
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
    </div>
<!-- card 3 -->
    </div>
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
    </div>
<!-- card 4 -->
    </div>
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
    </div>
<!-- card 5 -->
    </div>
    <div class="p-5 border text-light">
    <div class="card" style="width: 18rem;">
      <img src="#" class="card-img-top" alt="...">
        <div class="card-body">
    <h5 class="card-title">Berita</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
    </div>
  </div>
  <!-- card item end -->

  <!-- footer -->
  <div class="footer bg-light text-center">
      <div class="medsos-footer">
        <p>Ikuti kami di :</p>
        <div class="icon-medsos text-primary d-flex justify-content-center">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
      </div>
<!-- baris 1 -->
      <div class="supported mt-5">
        <p>
          Supported by
          <a class="text-decoration-none text-dark" href="https://instagram.com/ziimpossible_?igshid=YmMyMTA2M2Y=" target="_blank">@ziinspiration</a>
        </p>
      </div>
<!-- baris 2 -->
      <div class="copyright mt-5">
        <i class="fa-regular fa-copyright"></i> 2022
        <a href="index.php" class="text-decoration-none"><i class="fa-solid fa-user-doctor text-primary ms-1"></i><span> Halodek</span></a>
        - Apotek online paling komplit All Rights Reserved
      </div>
    </div>
  <!-- footer end -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  <script>
    var nav = document.querySelector('nav');
      
      window.addEventListener('scroll',function(){
        if(window.pageYOffset >100){
          nav.classList.add('bg-dark','shadow');
        } else {
          nav.classList.remove('bg-dark','shadow');
        }
      });
    
 
  </script>
</body>
</html>



