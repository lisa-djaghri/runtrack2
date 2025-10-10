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
    
function cesar($str, $decalage = 2) {
    $alphabetMin = "abcdefghijklmnopqrstuvwxyz";
    $alphabetMaj = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $texteFinal = "";
    $positionLettre = 0;

    while (isset($str[$positionLettre])) {
        $caractereActuel = $str[$positionLettre];
        $estUneLettre = false;

        $positionDansAlphabet = 0;
        while (isset($alphabetMin[$positionDansAlphabet])) {
            if ($alphabetMin[$positionDansAlphabet] == $caractereActuel) {
                $nouvellePosition = ($positionDansAlphabet + $decalage) % 26;
                $caractereActuel = $alphabetMin[$nouvellePosition];
                $estUneLettre = true;
                break;
            }
            $positionDansAlphabet++;
        }

        if (!$estUneLettre) {
            $positionDansAlphabet = 0;
            while (isset($alphabetMaj[$positionDansAlphabet])) {
                if ($alphabetMaj[$positionDansAlphabet] == $caractereActuel) {
                    $nouvellePosition = ($positionDansAlphabet + $decalage) % 26;
                    $caractereActuel = $alphabetMaj[$nouvellePosition];
                    break;
                }
                $positionDansAlphabet++;
            }
        }

        $texteFinal .= $caractereActuel;
        $positionLettre++;
    }

    return $texteFinal;
}

function plateforme($str) {
    $motActuel = "";
    $texteFinal = "";
    $positionCaractere = 0;

    while (isset($str[$positionCaractere])) {
        $caractereActuel = $str[$positionCaractere];

        if ($caractereActuel == " ") {

            $tailleMot = 0;
            while (isset($motActuel[$tailleMot])) {
                $tailleMot++;
            }

            if ($tailleMot >= 2 && $motActuel[$tailleMot - 2] == 'm' && $motActuel[$tailleMot - 1] == 'e') {
                $motActuel .= "_";
            }

            $texteFinal .= $motActuel . " ";
            $motActuel = "";
        } else {

            $motActuel .= $caractereActuel;
        }

        $positionCaractere++;
    }

    $tailleMot = 0;
    while (isset($motActuel[$tailleMot])) {
        $tailleMot++;
    }

    if ($tailleMot >= 2 && $motActuel[$tailleMot - 2] == 'm' && $motActuel[$tailleMot - 1] == 'e') {
        $motActuel .= "_";
    }

    $texteFinal .= $motActuel;

    return $texteFinal;
}

    if (isset($_POST["str"]) && isset($_POST["fonction"])) {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        
        if ($fonction == "gras") {
           echo gras($str);
        }
        elseif ($fonction == "cesar") {
            echo cesar($str);
        }
        elseif ($fonction == "plateforme") {
            echo plateforme($str);
        }
    }

    ?>
</body>
</html>