<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT * FROM salles ORDER BY capacite ASC");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Nom</td>
        <td>Capacite</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['nom'] . "</td>";
        echo "<td>" . $donnee['capacite'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>