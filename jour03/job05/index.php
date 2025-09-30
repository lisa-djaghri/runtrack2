<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$longueur = 0;
while (isset($str[$longueur])) {
    $longueur++;
}

for ($i = 0; $i < $longueur; $i++) {
    $c = $str[$i];

    if (
        ($c >= 'a' && $c <= 'z') ||
        ($c >= 'A' && $c <= 'Z')
    ) {

        if (
            $c == 'a' || $c == 'e' || $c == 'i' ||
            $c == 'o' || $c == 'u' || $c == 'y' ||
            $c == 'A' || $c == 'E' || $c == 'I' ||
            $c == 'O' || $c == 'U' || $c == 'Y'
        ) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

echo "<table>
        <thead>
           <tr>
             <th>Voyelles</th>
             <th>Consonnes</th>
           </tr>
        </thead>
        <tbody>
           <tr>
             <td>".$dic["voyelles"]."</td>
             <td>".$dic["consonnes"]."</td>
           </tr>
        </tbody>
      </table>";
?>
