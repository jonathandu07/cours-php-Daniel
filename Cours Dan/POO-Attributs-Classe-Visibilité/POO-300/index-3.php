<?php
require('class_stagiaires.php');
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmation orientée objet</title>
</head>
<body>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
        <label> Nom du stagiaire</label><input type="text" name="nom" ><input type="submit" value="Soumettre" name="soumettre" />
        </form>
    </section>
<?php
if(isset($_POST['soumettre'])){
    $Nom=$_POST['nom'];
    $nom_apprenant= new stagiaires;
    $nom_apprenant->setRecuperer($Nom);
    echo $nom_apprenant->getAfficher();
}
?>
</body>
</html>
