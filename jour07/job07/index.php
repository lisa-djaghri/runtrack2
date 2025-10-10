<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="POST">
        <input type="text" name="str">
        <select name="fonction">
            <option value="">--Choisir un style--</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Valider</button>
    </form>

    <?php
    
function gras($str) {
    $resultat = "";
    $mot = "";
    $lettre = 0;

    while (isset($str[$lettre])) {
        $char = $str[$lettre];

        if ($char == " " || !isset($str[$lettre + 1])) {

            if ($char != " ") $mot .= $char;

            if ($mot[0] >= 'A' && $mot[0] <= 'Z') {
                $resultat .= "<b>$mot</b>";
            } else {
                $resultat .= $mot;
            }

            if ($char == " ") $resultat .= " ";

            $mot = "";
        } else {
            $mot .= $char;
        }

        $lettre++;
    }

    return $resultat;
}
    
    if (isset($_POST["str"]) && isset($_POST["fonction"])) {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        
        if ($fonction == "gras") {
            echo gras($str);
        }
        elseif ($fonction == "cesar") {
            echo "Fonction cesar à faire";
        }
        elseif ($fonction == "plateforme") {
            echo "Fonction plateforme à faire";
        }
    }
    
    ?>
</body>
</html>