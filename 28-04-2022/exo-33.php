<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manip donné</title>
</head>
<body>
    <h1>Exercice sur la manipulation de données avec intégrité</h1>
    <?php
    $chaine=array('cet été, a la plage','le bateau jaune et bleu');
    $recherche=array('été','plage','jaune','bleu');
    $remplacer=array('hiver','montagne','rose','violet');

    foreach($chaine as $index => $text){
        $text=str_replace($recherche,$remplacer,$chaine[$index])."<br/>";
        echo($text);
    }

    foreach($chaine as $indice => $valeur){
        foreach($recherche as $key => $cle){
            foreach($remplacer as $claves => $texto){
                echo ($valeur.'  '.str_replace($valeur,$cle,$texto)."<br/>");
            }
        }
    }
    ?>
</body>
</html>