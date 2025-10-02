<html>
<form method= "GET">
    <input type= "text" name= "text1">
    <input type= "text" name= "text2">
    <input type= "submit">
</form>
</html>
<?php

$compteur = 0;

foreach ($_GET as $cle => $valeur) {
    if ($valeur != "") {
        $compteur++;
    }
}

echo "Nombre d'arguments GET : " . $compteur;

?>