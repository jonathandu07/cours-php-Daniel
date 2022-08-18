<?php
include_once('class/legumes.class.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <title>Ventes de légumes</title>
</head>

<body>

    <?php
    //Déclaration d'une variable pour l'instancier à la classe Legumes
    $carotte = new Legumes;
    $navet = new Legumes;
    $poireau = new Legumes;

    // Initialisation des variables objets pour le nom
    $carotte->setNom('carotte');
    $navet->setNom('navet');
    $poireau->setNom('poireau');

    // Initialisation des variables objets pour le prix
    $carotte->setPrix(1);
    $navet->setPrix(2);
    $poireau->setPrix(3);


    if (isset($_POST['envoyer'])) {
        $legumeList = $_POST['legumes'];
        $qte         = $_POST['quantite'];

        $$legumeList->setQte($qte);

        echo " Le montant de votre panier est de : " . $$legumeList->Calculer() . " euros";
    }

    ?>
    <form action="" method="POST">
        <select name="legumes" size="1">
            <option value="<?php echo $carotte->getNom(); ?>">
                <?php echo $carotte->getNom(); ?> : <?php echo $carotte->getPrix(); ?>€
            </option>
            <option value="<?php echo $poireau->getNom(); ?>">
                <?php echo $poireau->getNom(); ?> : <?php echo $poireau->getPrix(); ?>€
            </option>
            <option value="<?php echo $navet->getNom(); ?>">
                <?php echo $navet->getNom(); ?> : <?php echo $navet->getPrix(); ?>€
            </option>
        </select>
        <br />
        <input type="text" name="quantite" placeholder="Saisir la quantité" required />
        <br />
        <input type="submit" name="envoyer" value="Panier" />
    </form>

</body>

</html>