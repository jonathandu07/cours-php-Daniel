<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Regex</title>
</head>
<body>
    <?php

        $str ="CCI DWWM";
        $pattern="/dwwm/i";
        $pattern1="/dwwm/u";

        echo "<section>".(preg_match($pattern,$str))."</section>";
        // la fonction preg_match retourne 1 si elle trouve une chaine de carractères correspondante
        echo "<section>".(preg_match($pattern1,$str))."</section>";
        echo "<section>".(preg_match_all($pattern,$str))."</section>";
        // La fonction preg_match_all retourne combien de fois il trouve la chaine de carractères correspondant
        $str ="a que coucou les geeks";
        $pattern2="/ou/i";
        echo "<section>".(preg_match_all($pattern2,$str))."</section>";


    ?>
    
    <p>

    <p>

<?php
if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer
    if (preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,30}$#i", $_POST['mail']))
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}
?>
</p>
<form method="post">
<p>
    <label for="mail">Votre mail ?</label> <input id="mail" name="mail" /><br />
    <input type="submit" value="Vérifier le mail" />
</p>
</form>
</form>
</body>
</html>