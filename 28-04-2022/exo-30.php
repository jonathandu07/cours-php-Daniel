<?php
error_reporting(0);
// évite l'affichage des message type warning

// afficher la valeur en base 10 avec deux décimal
$nombre =89;
printf("%1.2f €",$nombre);
echo("<hr/>");

$nombre=89;
printf("%b",$nombre);
echo("<hr/>");

$nombre=89;
printf("%x",$nombre);
echo("<hr/>");

echo(str_repeat("yolo",8));

// normalisation du traitement des caractères
echo('<br>');
$nom="Mudat";
$prenom="Albert";
$adresse="25; ru du ha ha";
$ville="26000 valence";
$mail='geek@gmail.com';

$nom=strtolower($nom);
$prenom=ucfirst(strtolower($prenom));
$adresse=ucwords(strtolower($adresse));
$ville=strtoupper($ville);
$mail=strtolower($mail);

echo($prenom." ".$nom."<br/>".$adresse."<br/>".$ville."<br/>".$mail);

?>