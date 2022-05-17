<?php
    // premier cookier expériant à la fin de la session

    $ok1=setcookie('Prenom','Jonathan');

    // deuxième cookie expériant dans 30 jours

    $ok2=setcookie('Nom', 'YHWH', time()+(30*24*3600));

    if($ok1 and $ok2){
        $message ="Cookie déposé normalement";
    }else{
        $message ="Cookie non déposé normalement";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <?php
        echo $message."<br/>";
    ?>
    
    <a href="./redirection-cookies.php">Page 2</a>
</body>
</html>