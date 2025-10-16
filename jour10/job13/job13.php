<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Nom</td>
        <td>Etage</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['nom_salle'] . "</td>";
        echo "<td>" . $donnee['nom_etage'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>