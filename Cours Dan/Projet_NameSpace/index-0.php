<?php
include_once('etudiant.class.php');
include_once('apprenant.class.php');

use Cci\Dwwm\Etudiant;

$stagiaire = new Etudiant;
$stagiaire1 = new Cci\Stagiaires\Etudiant;
echo $stagiaire->afficheNom() . '<br />';

echo $stagiaire->afficheDate() . '<br />';

echo $stagiaire1->afficheNom() . '<br />';
