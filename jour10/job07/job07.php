<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT SUM(superficie) AS superficie_totale FROM etage");
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
        echo "<td>" . $donnee['superficie_totale'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>