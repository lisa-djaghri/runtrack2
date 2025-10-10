<?php

$str = "Hello World";

function leetSpeak($str) {
    $result = "";
    $index = 0;
    
    while (isset($str[$index])) {
        $char = $str[$index];
        
        if ($char == "A" || $char == "a") {
            $result = $result . "4";
        } elseif ($char == "B" || $char == "b") {
            $result = $result . "8";
        } elseif ($char == "E" || $char == "e") {
            $result = $result . "3";
        } elseif ($char == "G" || $char == "g") {
            $result = $result . "6";
        } elseif ($char == "L" || $char == "l") {
            $result = $result . "1";
        } elseif ($char == "S" || $char == "s") {
            $result = $result . "5";
        } elseif ($char == "T" || $char == "t") {
            $result = $result . "7";
        } else {
            $result = $result . $char;
        }
        
        $index = $index + 1;
    }
    
    return $result;
}

// Test de la fonction
echo "Texte original : " . $str . "<br>";
echo "Texte en leet speak : " . leetSpeak($str);

?>