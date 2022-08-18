<?php
    include_once("./class/calculTva.class.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Montant TTC</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="number" name="prixht">
        <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $prixttc = new TVA();
    $prixttc->setTva($_POST['prixht']);

    echo "le prix ttc est de :".$prixttc->getTva()*TVA::TVA;
}

?>