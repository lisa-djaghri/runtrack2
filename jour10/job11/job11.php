<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT AVG(capacite) AS moyenne_capacite FROM salles");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Capacite moyenne</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['moyenne_capacite'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>