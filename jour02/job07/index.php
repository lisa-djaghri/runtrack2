<?php

$hauteur = 5;

for ($i = 0; $i < $hauteur; $i++) {

    $espacesAvant = $hauteur - $i - 1;
    
    if ($i == 0) {

        echo str_repeat('&nbsp;', $espacesAvant) . '/\\' . "<br />";
    } elseif ($i == $hauteur - 1) {

        $largeurBase = $i;
        echo '/' . str_repeat('_', $largeurBase) . '\\' . "<br />";
    } else {

        $espacesInternes = $i * 2;
        echo str_repeat('&nbsp;', $espacesAvant) . '/' . str_repeat('&nbsp;', $espacesInternes) . '\\' . "<br />";
    }
}
?>