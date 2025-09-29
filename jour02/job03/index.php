<?php 

for ($nbr = 0; $nbr <= 100; $nbr++) {
    if ($nbr <= 20) {
        echo "<i> $nbr </i><br />";
    }
    elseif ($nbr == 42) {
        echo "LaPlateforme_<br />";
    }
    elseif ($nbr <= 50) {
        echo "<b> $nbr </b><br />";
    }
    else {
    echo $nbr . "<br />";
    }
}
?>