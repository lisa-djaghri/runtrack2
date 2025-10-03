<html>
<form method="POST">
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="submit" value="Envoyer">
</form>

<?php
    if ($_POST["username"] === "John" && $_POST["password"] === "Rambo"){
        echo "C’est pas ma guerre";
    }

    else {
        echo "Votre pire cauchemar";
    }
?>