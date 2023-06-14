<?php 
$mahasiswa = [
            ['Galuh','🦤','🍟'],
            ['wikri','🦒','🌭'],
            ['rama','🍿','🐕‍🦺'],
            ['ramadhan','🐒','🧀'],
            ['madan','🍜','🦈']
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs ){ ?> 
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>Makanan Faavorit : <?= $mhs[2]; ?> </li>
        <li>Peliharaan : <?= $mhs[1]; ?> </li>
    </ul>
    <?php }?>
</body>
</html>

