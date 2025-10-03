<html>
<form method="POST">
    <input type="text" name="largeur">
    <input type="text" name="hauteur">
    <input type="submit" value="Envoyer">
</form>
</html>
<?php

$largeur = $_POST["largeur"];
$hauteur = $_POST["hauteur"];

for ($exterieur = 0; $exterieur < $hauteur; $exterieur++) {

        for ($interieur = 0; $interieur < $hauteur - $exterieur; $interieur++) {
            echo "&nbsp;&nbsp;";
        }

        echo "/";

        for ($interieur = 0; $interieur < $exterieur * 2; $interieur++) {
            echo "_";
        }

        echo "\\"; 
        echo "<br />";
    }

for ($haut = 0; $haut < $hauteur - 1; $haut++) {

    echo "|";

    for ($larg= 0; $larg < $hauteur * 2; $larg++){
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