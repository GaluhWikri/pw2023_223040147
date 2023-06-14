<?php 

  $no_angkot = 1 ;
  $jumlah_angkot = 10 ;
  $ankot_rusak = 4 ;

  while($no_angkot <= $jumlah_angkot - $ankot_rusak) {
    echo "angkot nomer. $no_angkot beroperasi dengan baik.<br>" ;
    $no_angkot++ ;
  }

   
?>