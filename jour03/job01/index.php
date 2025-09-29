<?php

$nombres = [200, 204, 173, 98, 171, 404, 459];

foreach ($nombres as $nbr) {
    if ($nbr % 2 == 0) {
        echo "$nbr est pair <br />";
    }
    else {
        echo "$nbr est impair <br />";
    }
}

?>