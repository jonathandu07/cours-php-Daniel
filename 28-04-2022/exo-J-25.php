<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Deo Grattia</title>
</head>
<body>
    <form>
        <input type="text" name="lettre" />
        <input type="submit" name="envoyer"/>


    <?php
    $lettre=strtoupper($_POST['lettre']);
    if (isset($_POST['envoyer'])){
    $voyelle=array("a","o","u","y","i","e");

}

    if (in_array($voyelle($lettre))){
        echo("est une voyelle");
    }
    else{
        echo("n'est pas une voyelle");
    }

    ?>
    </form>
</body>
</html>