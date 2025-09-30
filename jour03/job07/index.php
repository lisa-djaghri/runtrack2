<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$tableau = [];
$i = 0;
while (isset($str[$i])) {
    $tableau[$i] = $str[$i];
    $i++;
}
$longueur = $i;

$resultat = [];
for ($j = 0; $j < $longueur - 1; $j++) {
    $resultat[$j] = $tableau[$j + 1];
}

$resultat[$longueur - 1] = $tableau[0];

for ($k = 0; $k < $longueur; $k++) {
    echo $resultat[$k];
}
?>