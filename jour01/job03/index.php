<?php

$boolean = true; 
$boolean2 = false;

$full = 17;
$text = "Chaine de caracteres";
$float = 3.14;

?>
<html>
<table>
    <thead>
        <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>True Boolean</td>
        <td>$boolean</td>
        <td><?php echo $boolean ?></td>
    </tr>
    <tr>
        <td>False Boolean</td>
        <td>$boolean2</td>
        <td><?php echo $boolean2 ?></td>
    </tr>
    <tr>
        <td>Entier</td>
        <td>$full</td>
        <td><?php echo $full ?></td>
    </tr>
    <tr>
        <td>Chaine caracteres</td>
        <td>$text</td>
        <td><?php echo $text ?></td>
    </tr>
    <tr>
        <td>Nbr virgule</td>
        <td>$float</td>
        <td><?php echo $float ?></td>
    </tr>
    