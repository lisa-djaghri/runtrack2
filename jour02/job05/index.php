<?php

for ($n = 2; $n <= 1000; $n++) {
    $est_premier = true; 

    for ($d = 2; $d < $n; $d++) {
        if ($n % $d == 0) {
           
            $est_premier = false;
            break;
        }
    }

    if ($est_premier) {
        echo $n . "<br />";
    }
}
?>