<?php

require('class_voiture.php');

$voiture=new Voiture("rouge","6","20");
//Exercice 1
/*echo $voiture->couleur.'<br/>';
echo $voiture->puissance.'<br/>';
echo $voiture->vitesse;*/

echo $voiture->afficherCompteur().'<br/>';
echo $voiture->afficherCouleur().'<br/>';
echo $voiture->afficherPuissance();