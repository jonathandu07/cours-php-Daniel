<?php

class Combattant
{
    private $nom;
    private $classe;
    private $attaque;
    private $pv;
    private $forcegeek;

    public function __construct(){
        $this->nom = 'Jonathandu07';
        $this->classe = 'Commando';
        $this->attaque = '8';
        $this->pv = '100';
        $this->forcegeek = true;
    }

    public function affichageNom()
    {
        return $this -> nom;
    }
    public function affichageClasse()
    {
        return $this -> classe;
    }
    public function affichageAttaque()
    {
        return $this -> attaque;
    }

    public function affichageforcegeek()
    {   
        return $this -> forcegeek;
    }

    public function degat(){
        if ($this-> forcegeek == true){
            return $this -> pv - $this -> attaque;
        }
    }
}

$matador = new Combattant();
echo $matador-> affichageNom().'<br/>';
echo '<hr />';
echo $matador-> affichageClasse().'<br/>';
echo '<hr />';
echo $matador-> affichageAttaque().'<br/>';
echo '<hr />';
echo 'Point de vie = '.$matador-> degat().'<br/>'; 