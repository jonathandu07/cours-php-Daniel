<?php
    include_once( "./class/legumes.class.php")
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Vente légumes</title>
</head>
<body>
<?php
// Instanciation de la classe Legume à la variable pour instancier un objet de la classe

    $fraise =new Legumes();
    $radis =new Legumes();
    $tomate =new Legumes();
    $harricot =new Legumes();
    $courgette =new Legumes();
    $carotte =new Legumes();

// Initialisation des variables objets

$fraise -> setChoix('fraise');
$radis -> setChoix('radis');
$tomate -> setChoix('tomate');
$harricot -> setChoix('harricot');
$courgette -> setChoix('courgette');
$carotte -> setChoix('carotte');

// Initialisation du prix des objets

$fraise -> setPrix(0.5);
$radis -> setPrix(0.2);
$tomate -> setPrix(0.1);
$harricot -> setPrix(0.05);
$courgette -> setPrix(0.8);
$carotte -> setPrix(0.5);

// Initialisation du prix des quantites

// $fraise -> setQuantite(5);
// $radis -> setQuantite(2);
// $tomate -> setQuantite(1);
// $harricot -> setQuantite(5);
// $courgette -> setQuantite(8);
// $carotte -> setQuantite(5);

// Initialisation des totaux

// $fraise -> setTotal();
// $radis -> setTotal();
// $tomate -> setTotal();
// $harricot -> setTotal();
// $courgette -> setTotal();
// $carotte -> setTotal();

?>
<section>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="pet-select">Choisir un légume:</label>

<select name="legume" id="select">
    <option value="">--options--</option>
    <option value="fraise"><?php echo $fraise->getChoix().' '.$fraise->getPrix()."€ l'article"; ?></option>
    <option value="radis"><?php echo $radis->getChoix().' '.$radis->getPrix()."€ l'article"; ?></option>
    <option value="tomate"><?php echo $tomate->getChoix().' '.$tomate->getPrix()."€ l'article"; ?></option>
    <option value="harricot"><?php echo $harricot->getChoix().' '.$harricot->getPrix()."€ l'article"; ?></option>
    <option value="courgette"><?php echo $courgette->getChoix().' '.$courgette->getPrix()."€ l'article"; ?></option>
    <option value="carotte"><?php echo $carotte->getChoix().' '.$carotte->getPrix()."€ l'article"; ?></option>
</select>
<input type="submit" name="submit" value="Submit">
<input type='number' name='nombre' />
</form>
</section>
    
<section>
<?php
//((isset($_POST['fraise'])) || isset($_POST['radis']) || isset($_POST['tomate']))
if (isset($_POST['submit'])){
    $legume=$_POST['legume'];
    $nombre=$_POST['nombre'];

    $$legume->setQuantite($nombre);

    echo "le montant de votre panier est de : ".$$legume->Total()." €";


}
?>    
</section>

<section>
    <?php
        // echo $fraise->getChoix().' '.$fraise->getPrix()."€ l'article"." "."<br />"."quantité : ".$fraise->getQuantite();
        // echo "<br/>";
        // echo "Prix total : ".$fraise->Total()."€";
    ?>
</section>
</body>
</html>