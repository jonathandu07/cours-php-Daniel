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
    <form>
        <input type="text" name="lettre" />
        <input type="submit" name="envoyer"/>

 
    <?php
    $voyelle=array("a","o","u","y","i","e");
    $lettre=strtoupper($_POST[$voyelle]);
    if (isset($_POST['envoyer'])){
    // $voyelle=array("a","o","u","y","i","e");

    // $i=rand(1,5);
    
    switch($lettre){
        case "A":
        case "O":
        case "U":
        case "Y":
        case "I":
        case "E":
            echo($lettre ."est une voyelle");
            break;

            default:
            echo($lettre ."n'est pas une voyelle");


    }
}

    ?>
    </form>
</body>
</html>