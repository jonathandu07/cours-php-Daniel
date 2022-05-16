<?php
    $longueur=5;
    $compteur=0;
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Do While</title>
</head>
<body>
    <?php
    $i=rand(1,5);
    switch($i){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo($i ."est un chiffre impair");
            break;

        default:
        echo($i ."est un chiffre pair");


    }

    ?>
</body>
</html>