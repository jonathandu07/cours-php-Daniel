<?php

include('class_heritage.php');
include('class_heritage_nom.php');

$apprenant1 = new stagiaire();
$apprenant1->setNom('sandrine');
echo $apprenant1->getNom() . ' concerne la classe stagiaire<br/>';


$apprenant2 = new stagiaire_fille();
$apprenant2->setNom('alain');
$apprenant2->setAge(55);
echo $apprenant2->getNom() . ' qui a ' . $apprenant2->getAge() . ' ans, concerne la classe stagiaire_fille<br/>';
