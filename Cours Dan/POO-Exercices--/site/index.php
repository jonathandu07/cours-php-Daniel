<?php
require('classe/legume.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vente de légumes</title>
</head>

<body>

<?php

$carotte = new Legume();
$navet   = new Legume();
$poireau = new Legume();

$carotte->setNom('carotte');
$navet->setNom('navet');
$poireau->setNom('poireau');

$carotte->setPrix(1);
$navet->setPrix(2);
$poireau->setPrix(3);

/*$carotte->setQuantite(10);
$navet->setQuantite(6);
$poireau->setQuantite(10);*/

// echo $poireau->Calcul();

if(isset($_POST['valider'])) {
	$legumeList = $_POST['legumeList'];
	$qt         = $_POST['qt'];

	$$legumeList->setQuantite($qt);
	
	if(is_numeric($qt)) {
		echo 'Le montant de votre panier est de ' .$$legumeList->Calcul(). ' euros'; 
	}
}
?>

<form method="post" action="">
<p align="center">
<select name="legumeList">
	<option value="<?= $carotte->getNom(); ?>"><?= $carotte->getNom(); ?>: <?= $carotte->getPrix(); ?> euro</option>
    <option value="<?= $navet->getNom(); ?>"><?= $navet->getNom(); ?>: <?= $navet->getPrix(); ?> euros</option>
    <option value="<?= $poireau->getNom(); ?>"><?= $poireau->getNom(); ?>: <?= $poireau->getPrix(); ?> euros</option>
</select>
</p>
<p align="center">
<input type="text" name="qt" placeholder="Quantité" />
</p>
<p align="center">
<input type="submit" name="valider" value="Valider" />
</p>
</form>

</body>
</html>