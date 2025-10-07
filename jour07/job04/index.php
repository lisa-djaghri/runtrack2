<?php

$a = 2;
$operation = "+";
$b = 3;

function calcul($a, $operation, $b) {

    if ($operation == "+") {
        return $a + $b;
    }
    elseif ($operation == "-") {
        return $a - $b;
    }
    elseif ($operation == "*") {
        return $a * $b;
    }
    elseif ($operation == "/") {
        return $a / $b;
    }
    else {
        return "Opération inconnue";
    }
}

echo calcul($a, $operation, $b);

?>
