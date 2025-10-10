<?php

$nomCookie = "prenomUtilisateur";
$duree = 365*24*60*60;
$prenom = "";

if (isset($_POST['deco'])) {
    setcookie($nomCookie, "", time() - 3600);
    $prenom = "";
} 

elseif (isset($_POST['prenom']) && $_POST['prenom'] != "") {
    $prenom = $_POST['prenom'];
    setcookie($nomCookie, $prenom, time() + $duree);
} 

elseif (isset($_COOKIE[$nomCookie])) {
    $prenom = $_COOKIE[$nomCookie];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion simple</title>
</head>
<body>

<?php if ($prenom == ""): ?>

    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php else: ?>
    
    <p>Bonjour <?php echo $prenom; ?> !</p>
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php endif; ?>

</body>
</html>
