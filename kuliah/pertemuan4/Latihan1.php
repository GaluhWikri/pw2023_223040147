<?php 

$angka1= 111;

// cek jika $angka dibagi2, sisa nya 1 

function hahaa($angka1){

    if ($angka1 % 2== 1){
        echo "$angka1 adalah bilang Ganjil";
    }
    else {
        echo "$angka1 adalah bilangan Genap";
    }
}

echo hahaa (10); //Argument nya 
echo "<br>";
echo hahaa (6);
    ?>