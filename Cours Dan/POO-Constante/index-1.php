<?php
require('class/class_eleve.php');

$stagiaire = new Eleve;

$stagiaire->setNom('Nicolas');
echo $stagiaire->getNom() . '<br/>';
//Opérateur deux fois deux points pour afficher la valeur de notre constante, opérateur de résolution de portée
echo $stagiaire::ECOLE . '<br />';
echo "L'école est  : " . Eleve::ECOLE . '<br />';
