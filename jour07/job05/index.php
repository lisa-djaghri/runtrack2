<?php

$str = "C'est trop dur";
$char = "r";

function occurrences($str, $char) {
    $nbr = 0;
    $index = 0;
    
    while ($index < strlen($str)) {
        if ($str[$index] == $char) {
            $nbr = $nbr + 1;
        }
        $index = $index + 1;
    }
    
    return $nbr;
}

// Test de la fonction
echo "Nombre d'occurrences de '$char' dans '$str' : " . occurrences($str, $char);

?>