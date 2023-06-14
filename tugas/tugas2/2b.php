<?php 
    echo "<table>" ;
    for ($x = 1; $x <= 10 ; $x++) {
        echo "<tr>" ;
        for ($i = 1; $i <= $x; $i++) {
        echo "<td>" .  $i . "</td>";
    }
        echo "</tr>" ;
}

        echo "</table>" ; 


?>