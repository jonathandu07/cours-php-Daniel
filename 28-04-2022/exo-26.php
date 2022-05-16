<?php
$langage['PHP']=array('trés difficile', 'difficile');
$langage['HTML']=array('trés difficile', 'facile', 'newbee++');
$langage['JS']=array('trés difficile', 'difficile', 'senior');

foreach($langage as $indice  => $valeur){
    foreach($valeur as $index => $sortie){    
    echo($indice.' => '.$sortie.'<br/>');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo DADA</title>
</head>
<body>
    <div>
       <input type="checkbox">
       <input type="submit">
    </div>
    
    <?php
    $en=("<h1>Wellcom</h1>")
    ?>
    <?php
    $fr=("<h1>Bienvenue</h1>")
    ?>
    <?php
    $esp=("<h1>Bienvenido</h1>")
    ?>
    <?php
    $de=("<h1>Wilkomen</h1>")
    ?>
    <?php
    $langue=rand($en,$fr,$esp,$de);
    switch($langue){
        case $en:
        case $fr:
        case $esp:
        case $de:
            echo($langue);
            break;

        default:
        echo($i ."est un chiffre pair");


    }

    ?>
</body>
</html>

