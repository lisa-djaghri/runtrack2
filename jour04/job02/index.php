<html>
<form method="GET">
    <input type="text" name="Nom">
    <input type="text" name="Prénom">
    <input type="text" name="Âge">
    <input type="submit" value="Envoyer">
</form>
<table>
<thead>
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($_GET as $cle => $valeur) {
    echo "<tr>
         <td>".$cle."</td>
         <td>".$valeur."</td>
         </tr>";
}
?>
</tbody>
</table>
</html>
