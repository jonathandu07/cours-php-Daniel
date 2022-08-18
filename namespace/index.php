<?php
    //include_once( "./class/namespace.class.php");

use Cci\Dwwm\Etudiant;

    include_once( "./class/etudiant.class.php");

//use Cci\Hightschool\Etudiant;
    include_once( "./class/stagiaire.class.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Les espaces de noms</title>
</head>
<body>
    <section>
    <?php
    $etudiant = new Cci\Hightschool\Etudiant;
    echo $etudiant->AffichageNom()."<br/>";
    echo $etudiant->AffichageDate()."<br/>";

?>
    </section>

    <section>
    <?php
    $etudiant1 = new Etudiant();
    echo $etudiant1->AffichageNom()."<br/>";
    echo $etudiant1->AffichageDate()."<br/>";

?>
    </section>
</body>
</html>