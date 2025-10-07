<?php

$largeur = 20;
$hauteur = 10;

for ($larg= 0; $larg < $hauteur * 2; $larg++){
            echo "_";
        }

    echo "<br />";

for ($haut = 0; $haut < $largeur; $haut++) {

    echo "|";

    for ($larg= 0; $larg < $largeur; $larg++){
            echo "&nbsp;&nbsp;";
        }
        echo "|<br />";
    }

    echo "|";

for ($larg= 0; $larg < $hauteur * 2; $larg++){
            echo "_";
        }
        
    echo "|";
?>