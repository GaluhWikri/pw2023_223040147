<?php 
$mahasiswa = [
            [
            'nama'=>'Galuh',
            'binatang'=>'🦤',
            'makanan'=>['🍟','🍜']
            ],
            [
            'nama'=>'wikri',
            'binatang'=>'🦒',
            'makanan'=>'🌭'
            ],
            [
            'nama'=>'rama',
            'binatang'=>'🦈',
            'makanan'=>'🌭'
            ],
            [
            'nama'=>'ramadhan',
            'binatang'=>'🦈',
            'makanan'=>'🧀'
            ],
            [
            'nama'=>'madan',
            'binatang'=>'🐕‍🦺',
            'makanan'=>'🍜'
            ]
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs ){ ?> 
    <ul>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>Makanan Faavorit : <?= $mhs['makanan']; ?> </li>
        <li>Peliharaan : <?= $mhs['binatang']; ?> </li>
    </ul>
    <?php }?>
</body>
</html>

