<?php

$hauteur = 5;

for ($exterieur = 0; $exterieur < $hauteur; $exterieur++) {

        for ($interieur = 0; $interieur < $hauteur - $exterieur; $interieur++) {
            echo "&nbsp;&nbsp;";
        }

        echo "/";

        for ($interieur = 0; $interieur < $exterieur * 2; $interieur++) {
             echo "&nbsp;&nbsp;";
        }
        echo "\\"; 
        echo "<br />";
    }
    
     echo "/";

    for ($interieur = 0; $interieur < $exterieur * 2; $interieur++) {
            echo "_";
        }
        echo "\\"; 
?>