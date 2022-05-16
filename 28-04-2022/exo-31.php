<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversion</title>
</head>
<body>
    <form action="exo-31.php" method="POST">
        <input type="text" name="nombre">
        <input type="submit" name="valider" value="valider">
    </form>
    <?php
    $nombre=$_POST['nombre'];
    if(isset($_POST['valider'])){
        if(is_int($_POST['nombre'])){
            printf("%b ",$_POST['nombre']);   
        }

        else{
            echo("ce n'est pas un int");
        }
    }
    ?>
</body>
</html>