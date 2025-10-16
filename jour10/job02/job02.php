<?php

$bdd = new PDO('mysql:host=localhost;dbname=jour09;charset=utf8', 'root', '');

$requete = $bdd->query("SELECT nom, capacite FROM salles");
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>
    </tr>

    <?php

    while ($donnee = $requete->fetch()) {
        echo "<tr>";
        echo "<td>" . $donnee['nom'] . "</td>";
        echo "<td>" . $donnee['capacite'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
