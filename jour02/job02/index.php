<?php 

for ($nbr = 0; $nbr <= 1337; $nbr++) {
    if ($nbr == 26 || $nbr == 37 || $nbr == 88 || $nbr == 1111) {
       continue;
    }
    else {
    echo $nbr . "<br />";
    }
}
?>