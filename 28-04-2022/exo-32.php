<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 31</title>
</head>
<body>
    <h1>Manipuler des chaines de caractères</h1>
    <?php
    echo("<h2>STRLEN</h2>");
    $x="A que coucou";
    echo strlen($x)."<br/>";
    echo str_repeat("__", 80);
    echo("<h2> strolower stroupper ucfirst ucwords</h2>");
    $y="albert mudat";
    $x="ALBERT MUDAT";
    echo "strtolower ('$x') =".strtolower($x),"<br/>";
    echo "strtoupper ('$y') =".strtoupper($y),"<br/>";
    echo "ucfirst ('$x') =".ucfirst($x),"<br/>";
    echo "ucwords ('$y') =".ucwords($y),"<br/>";
    echo "lcfirst ('$y') =".lcfirst($y),"<br/>";
    echo str_repeat("__", 80);
    
    
    echo("<h2>sprintf</h2>");
    echo("Mise à jour de la date");
    echo sprintf('%02d/%02d/%04d', 4,5,2022)."<br/>";
    echo sprintf('%01.2f - %01.2f', 1/3,123545548.9)."<br/>";
    echo str_repeat("__", 80);

    echo("<h2>number_format</h2>");
    $x=1234.567;
    echo "number_format :($x) = ".number_format($x),"<br/>";
    // affiche les entiers
    echo "number_format :($x) = ".number_format($x,1),"<br/>";
    // affiche les entier avec une décimale
    echo "number_format :($x) = ".number_format($x,2),"<br/>";
    // affiche les entier avec le séparateur de milier et deux décimales
    echo "number_format :($x) = ".number_format($x,1,','),"<br/>";
    // affiche les entier avec le séparateur de milier et trois décimales
    echo str_repeat("__", 80);

    echo("<h2>Itril rtrim trim</h2>");
    $chaine="    toto    ";
    echo("nombre de caractère avant traitement".strlen($chaine)."<br/>");
    echo("Suppression en début de chaine, nobre de caractère :".strlen(ltrim($chaine))."<br/>");
    echo("Suppression en fin de chaine, nobre de caractère :".strlen(rtrim($chaine))."<br/>");
    echo("Suppression en début et en fin de chaine, nobre de caractère :".strlen(trim($chaine))."<br/>");

    echo str_repeat("__", 80);

    echo("<h2>substr()</h2>");
    $chaine="ALBERT MUDAT";
    echo("substr('$chaine'3): = ".substr($chaine,3)."<br/>");
    // supprime les 3 premiers caractères en partant de la gauche
    echo("substr('$chaine'3,2): = ".substr($chaine,3,2)."<br/>");
    // supprime les 3 premiers caractères en partant de la gauche 
    echo("substr('$chaine'-4): = ".substr($chaine,-4)."<br/>");
    echo("substr('$chaine'-4,3): = ".substr($chaine,-4,3)."<br/>");
    echo str_repeat("__", 80);

    echo("<h2>strpos()</h2>");
    $mail="geek@gmail.com";
    $position=strpos($mail,'@');
    // trouver la position d'un caractère
    echo("La position de votre caractère @ est:".$position."<br/>");
    $position=strpos($mail,'gmail');
    // trouver la position d'une suite de carractère
    echo("La position des caractères gmail est:".$position."<br/>");
    $position=strpos($mail,'com');
    // trouver la position d'une suite de carractère
    echo("La position des caractères com est:".$position."<br/>");
    echo str_repeat("__", 80);

    echo("<h2>strstr()</h2>");
    $mail="geek@gmail.com-gmail.com";
    $position=strstr($mail,'@');
    // trouver la position d'un caractère
    echo("La première occurence de votre caractère @ est:".$position."<br/>");
    $position=stristr($mail,'gmail');
    // trouver la position d'une suite de carractère
    echo("La première occurence des caractères gmail est:".$position."<br/>");
    $position=strrchr($mail,'com');
    // trouver la position d'une suite de carractère
    echo("La première occurence des caractères com est:".$position."<br/>");
    $position=strstr($mail,'-');
    // trouver la position d'un caractère
    echo("La première occurence de votre caractère - est:".$position."<br/>");
    echo str_repeat("__", 80);

    echo("<h2>strstr()</h2>");
    $chaine="Hola amigo";
    $recherche="o";
    $remplace="a";
    echo ("la chaine de départ est :".$chaine."devient :".str_replace($recherche,$remplace,$chaine));
    echo str_repeat("__", 80);
    ?>
</body>
</html>