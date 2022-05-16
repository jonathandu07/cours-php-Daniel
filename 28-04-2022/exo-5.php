<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccs/main.css">
    <title>Mi primera pagina en PHP</title>
</head>

<body>
    <p>
        <?php
        $valeur=15;
        if($valeur<18){
            echo("vous êtes mineur, interdit les films coquins");
        }
        else if($valeur>18){
            echo("vous êtes autorisés à voir les films drôles");
        }
        else{
            echo("Vous êtes autorisé de voir les films de votre choix");
        }

        ?>

    </p>
</body>

</html>
