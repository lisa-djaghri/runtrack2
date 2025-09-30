<?php 

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "";
$longueur = strlen($str);

for ($i = 0; $i < $longueur; $i++) {
    $caractere = $str[$i];

    if (
        $caractere == 'a' || $caractere == 'e' || $caractere == 'i' ||
        $caractere == 'o' || $caractere == 'u' || $caractere == 'y' ||
        $caractere == 'A' || $caractere == 'E' || $caractere == 'I' ||
        $caractere == 'O' || $caractere == 'U' || $caractere == 'Y'
    ) {
        $voyelles .= $caractere;
    }
}

echo $voyelles;
?>