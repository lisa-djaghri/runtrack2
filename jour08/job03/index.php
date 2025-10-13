<?php
session_start();

if (!isset($_SESSION['listePrenoms'])) {
    $_SESSION['listePrenoms'] = [];
}

if (isset($_POST['prenom']) && $_POST['prenom'] != "") {
    $_SESSION['listePrenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['listePrenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de prénoms</title>
</head>
<body>

    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h3>Prénoms ajoutés :</h3>
    <ul>
        <?php

        foreach ($_SESSION['listePrenoms'] as $prenom) {
            echo "<li>" . $prenom . "</li>";
        }
        ?>
    </ul>

</body>
</html>
