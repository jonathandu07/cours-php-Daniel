<?php

require_once 'namespace0.class.php';
require_once 'namespace1.class.php';

use Cci\Dwwm\Calculer;


$stagiaire = new Calculer();
echo $stagiaire->affichageNom();
echo $stagiaire->affichageDate();
$stagiaire1 = new Cci\stagiaire\Calculer();
echo $stagiaire1->affichagenom();
