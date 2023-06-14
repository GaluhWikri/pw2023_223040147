<?php 
$mahasiswa = [
    [   // mahasiswa 1
        'nama' => 'Galuh wikri',
        'nrp' => '223040147',
        'email' => 'galuh.223040147@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '1.jpg'
    ],
    [   // mahasiswa 2
        'nama' => 'CHANDRA ARDIANSYAH',
        'nrp' => '223040160',
        'email' => 'chandra.223040160@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '2.jpg'
    ],
    [   // mahasiswa 3
        'nama' => 'Ichka Sabila',
        'nrp' => '223040144',
        'email' => 'icka.223040144@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '3.jpg'
    ],
    [   // mahasiswa 4
        'nama' => 'MAHESA RAHDINTYO MUHAMMAD',
        'nrp' => '223040162',
        'email' => 'mahesa.223040162@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '4.jpg'
    ],
    [   // mahasiswa 5
        'nama' => 'MUHAMAD RAFLY IZUDIN AHZAMI',
        'nrp' => '223040158',
        'email' => 'rafly.223040120@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '5.jpg'
    ],
    [   // mahasiswa 6
        'nama' => 'MUHAMMAD ADIS SUMARWIN',
        'nrp' => '223040146',
        'email' => 'adis.223040146@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '6.jpg'
    ],
    [   // mahasiswa 7
        'nama' => 'KAKA PRADITHA PUTRA',
        'nrp' => '223040087',
        'email' => 'Kaka.223040087@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '7.jpg'
    ],
    [   // mahasiswa 8
        'nama' => 'Miftahul Huda',
        'nrp' => '223040145',
        'email' => 'miftahul.223040145@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '8.jpg'
    ],
    [   // mahasiswa 9
        'nama' => 'PEBRY ANDRIAN',
        'nrp' => '223040149',
        'email' => 'pebry.223040149@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '9.jpg'
    ],
    [   // mahasiswa 10
        'nama' => 'ADITYA FAUZAN SALMANNAUFAL',
        'nrp' => '223040159',
        'email' => 'aditya.223040159@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'foto' => '10.jpg'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
     <ul>
        <li> <img src="img/<?=$m['foto']; ?>" width=100></li>
        <li>Nama : <?= $m ['nama'] ?> </li>
        <li>NRP : <?= $m ['nrp'] ?> </li>
        <li>Jurusan : <?= $m ['jurusan'] ?> </li>
        <li>E-mail : <?= $m ['email'] ?> </li>
        <br>
     </ul>
    <?php endforeach ?>
</body>
</html>