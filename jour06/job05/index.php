<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Changement de Style</title>
    
</head>
<body>
        <form method="POST">
            <label for="style">Style :</label>
            
            <select name="style" id="style">
                <option value="">--Choisir un style--</option>
                <option value="style1">Blanc</option>
                <option value="style2">Noir</option>
                <option value="style3">Couleurs</option>
            </select>
            
            <button type="submit">Valider</button>
        </form>

    <?php
    $style = $_POST["style"];
    
    if ($style == "style1") {
        echo '<link rel="stylesheet" href="../asset/css/style1.css">';
    } elseif ($style == "style2") {
        echo '<link rel="stylesheet" href="../asset/css/style2.css">';
    } elseif ($style == "style3") {
        echo '<link rel="stylesheet" href="../asset/css/style3.css">';
    }
    ?>
</body>
</html>