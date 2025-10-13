<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

$tableau = [];

$index = 0;
while (isset($str[$index])) {
    $tableau[$index] = $str[$index];
    $index++;
}

for ($cara = 0; isset($tableau[$cara]); $cara += 2) {
    echo $tableau[$cara];
}

?>