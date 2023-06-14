<?php 
 //variable  scope /lingkup variable//
 $x = 10;
 
 function tampilx() {
      global $x ;
      echo $x;

 }

?>