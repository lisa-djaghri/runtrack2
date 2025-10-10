<?php

$nomCookie = "nbvisites";
$valeurCookie = 0;
$duree = 365*24*60*60;

if (isset($_POST['reset'])) {
    setcookie($nomCookie, 0, time() + $duree);
    $valeurCookie = 0;
} else {

    if (isset($_COOKIE[$nomCookie])) {
        $valeurCookie = $_COOKIE[$nomCookie];
    }

    $valeurCookie++;
    setcookie($nomCookie, $valeurCookie, time() + $duree);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites (cookie)</title>
</head>
<body>

    <p>Nombre de visites : <?php echo $valeurCookie; ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>
</html>
