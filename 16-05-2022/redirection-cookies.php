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
        if(isset($_COOKIE['Prenom'])&(isset($_COOKIE['Nom']))){
            echo $_COOKIE['Prenom'].' '.$_COOKIE['Nom'];
        }
    ?>
    
    <a href="./cookies-bis.php">Page 2</a>
</body>
</html>