<?php

$str = "Les choses que l'on possède finissent par nous posséder.";

$tableau = [];
$i = 0;
while (isset($str[$i])) {
    $tableau[$i] = $str[$i];
    $i++;
}

for ($j = $i - 1; $j >= 0; $j--) {
    echo $tableau[$j];
}

?>