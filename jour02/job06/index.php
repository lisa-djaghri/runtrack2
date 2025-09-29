<?php

$largeur = 20; 
$hauteur = 10; 

for ($haut = 1; $haut <= $hauteur; $haut++) {
    for ($larg= 1; $larg <= $largeur; $larg++){
        if ($haut == 1 || $haut == $hauteur || $larg == 1 || $larg == $largeur) {
            echo "*";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

?>