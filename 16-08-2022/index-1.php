<?php

class Tester
{
   private $valeur='test';

   public function affichageValeur (){
    return $this-> valeur;
   }

   public function modifierAffichage($text){
    $this->valeur = $text;
   }
}

$chaine = new Tester();

echo $chaine->affichageValeur(). '<br />';
echo '<hr />';
$chaine -> modifierAffichage('wallah');
echo $chaine -> affichageValeur(). '<br />';