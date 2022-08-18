<?php
spl_autoload_register(function($class){
	include('class/'.$class.'.php');
});
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>POO :: Niveau DWWM</title>
</head>

<body>
<h3>Compte bancaire</h3>
<form action="#" method="post">
	<input type="text" name="depot_nom" placeholder="Nom" /><br />
	<input type="text" name="depot_solde" placeholder="Solde" />
    <br /><br />
    <input type="text" name="depot_credit" placeholder="Créditer" /><br />
    <input type="text" name="depot_retrait" placeholder="Retrait" />
    <br /><br />
    <input type="submit" value="Créer compte" />
</form>
<hr />
<?php
if( (isset($_POST['depot_solde'])) || (isset($_POST['depot_nom'])) ) {
	$depot_solde=$_POST['depot_solde'];
	$depot_nom=$_POST['depot_nom'];
	$compte = new CompteBancaire($depot_nom, $depot_solde);
	echo $compte;
	
	$depot_credit = $_POST['depot_credit'];
	if($depot_credit) {
		$compte->crediter($depot_credit);
		echo '<br />';
		echo $compte;
	}
	
	$depot_retrait = $_POST['depot_retrait'];
	if($depot_retrait) {
		$compte->retrait($depot_retrait);
		echo '<br />';
		echo $compte;
	}
	
	// echo '<br />';
	// echo $compte->getNom();
	// echo '<br />';
	// echo $compte->getSolde();
}
?>
</body>
</html>