<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT COUNT(*) AS nb_etudiants FROM etudiants");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Nombre d'étudiants</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['nb_etudiants'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>