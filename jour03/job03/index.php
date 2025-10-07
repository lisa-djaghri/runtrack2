<?php

$str = "I'm sorry Dave I'm afraid I can't do that";

$tableau = [];
$positionLettre = 0;

while (isset($str[$positionLettre])) {
    $tableau[$positionLettre] = $str[$positionLettre];
    $positionLettre++;
}

$Voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

$positionLettre = 0;
while (isset($tableau[$positionLettre])) {

    $lettreActuelle = $tableau[$positionLettre];

    $Voyelle = 0;
    while (isset($listeDeVoyelles[$Voyelle])) {

        if ($lettreActuelle == $listeDeVoyelles[$Voyelle]) {
            echo $lettreActuelle;
        }

        $Voyelle++;
    }

    $positionLettre++;
}

?>