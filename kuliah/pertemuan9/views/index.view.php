
    <?php require("partials/nav.php")?>
    <?php require("partials/header.php")?>
    <?php require("partials/footer.php")?>    
<div class="container">
    <h1>HOME</h1>

    <h3>Daftar Mahasiswa</h3>
    <?php foreach ($students as $student) : ?>
        <ul>
            <li>Nama : <?= $student["nama"] ;?></li>
            <li>Nrp : <?= $student["npm"] ;?></li>
            <li>Email : <?= $student["Email"] ;?></li>
        </ul>
        <?php endforeach; ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>