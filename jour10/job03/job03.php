<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT * FROM etudiants");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Naissance</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        if ($donnee['sexe'] == "Femme") {
        echo "<tr>";
        echo "<td>" . $donnee['prenom'] . "</td>";
        echo "<td>" . $donnee['nom'] . "</td>";
        echo "<td>" . $donnee['naissance'] . "</td>";
        echo "</tr>";
        }
    }
    ?>
    </tbody>
</table>
</html>