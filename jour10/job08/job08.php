<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT SUM(capacite) AS capacite_totale FROM salles");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Superficie totale</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['capacite_totale'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>