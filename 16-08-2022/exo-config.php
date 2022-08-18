<?php

class Voiture
{
    private $typeVoiture = 'Citadine';

    private $vitesseVoiture = 0;

    private $couleur = 'Noir';

    private $puissance = '1000ch';

    public function classeVoiture(){
        return $this -> typeVoiture;
    }

    public function couleur(){
        return $this -> couleur;
    }

    public function vitesse(){
        return $this -> vitesseVoiture;
    }

    public function PuissanceVoiture(){
        return $this -> puissance;
    }
    
}
$chaine = new Voiture();

echo $chaine->classeVoiture('Noir'). '<br />';
echo '<hr />';
$chaine -> couleur('Noir'). '<br />';
echo $chaine -> couleur(). '<br />';
echo '<hr />';
echo $chaine -> vitesse(). '<br />';
echo '<hr />';
echo $chaine -> PuissanceVoiture(). '<br />';
echo '<hr />';