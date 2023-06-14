<?php 

//ARAY//
//MEMBUAT ARRAY//

$hari = array ('Senin','Selasa','Rabu');  //Versi lama 
$bulan = ['Januari','februari','Maret'];  // Versi baru
$myArray = ['Galuh','20','false'];
$emoji = ['🦤','🦒','🐕‍🦺','🐒','🦈'];

// Mencetak array 

echo $hari[1];
echo "<br>";
echo $bulan[0];
echo "<br>";

//Mencetak seluruh array 
//var_dump_print_r

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($emoji);
echo "<br>";

//Manipulasi Array//
//Mengunakan index//

$hari [3] = 'kamis';
print_r($hari);
echo "<br>";

//Menambahka elemen di akhir dengan mengosongkan indexnya //

$hari[] = "jum'at";
$hari[] = 'sabtu';
print_r($hari);
echo "<br>";

//Menambakan elemen di akhir menggunakan array_push //

array_push($bulan,'april','mei','juni');
print_r($bulan);
echo "<br>";


//
    ?>