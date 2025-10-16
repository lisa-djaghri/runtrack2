<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) < 18;");
?>
<html>
<table>
    <thead>
        <tr>
        <td>Prénom</td>
        <td>Nom</td>
        <td>Naissance</td>
        <td>Sexe</td>
        <td>Email</td>
        </tr>
        </thead>
        <tbody>
    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['prenom'] . "</td>";
        echo "<td>" . $donnee['nom'] . "</td>";
        echo "<td>" . $donnee['naissance'] . "</td>";
        echo "<td>" . $donnee['sexe'] . "</td>";
        echo "<td>" . $donnee['email'] . "</td>";
        echo "</tr>";
        }
    ?>
    </tbody>
</table>
</html>