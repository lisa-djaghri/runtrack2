<?php

$str = "Dans l'espace, personne ne vous entend crier";

$compteur = 0;

while (isset($str[$compteur])) {
    $compteur++;
}

echo "Nombre de caractères : " . $compteur;

?>