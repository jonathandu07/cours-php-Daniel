<?php
include_once('class/calculatrice.class.php');


?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>POO :: Niveau DWWM</title>
</head>

<body>
	<h3>Calculatrice</h3>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="valeur1" /><br />
		<input type="text" name="valeur2" />
		<br /><br />
		<input type="submit" value="+" name="ad" />
		<input type="submit" value="-" name="so" />
		<input type="submit" value="/" name="di" />
		<input type="submit" value="*" name="mu" />
	</form>
	<hr />
	<?php
	if ((isset($_POST['ad'])) || (isset($_POST['so'])) || (isset($_POST['di'])) || (isset($_POST['mu']))) {
	if (is_numeric($_POST['valeur1']) || is_numeric($_POST['valeur2'])) {
		$calculer = new Calculatrice($_POST['valeur1'], $_POST['valeur2']);
		if (isset($_POST['ad'])) {
			echo $calculer->additionner();
		} else if (isset($_POST['so'])) {
			echo $calculer->soustraire();
		} else if (isset($_POST['di'])) {
			echo $calculer->diviser();
		} else if (isset($_POST['mu'])) {
			echo $calculer->multiplier();
		}
	} else {
		echo 'veuillez saisir des valeurs numériques';
	}
	
	?>
</body>

</html>
<?php


?>