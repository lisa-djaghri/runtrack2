<?php

$nbr = 0;
while ($nbr <= 1000) {
    $nbr = gmp_nextprime($nbr);
    echo $nbr . "<br />";
    
}
?>