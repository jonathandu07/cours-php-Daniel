<?php

class Stagiaire
{
    private $_nom;

    const ECOLE='CCI DROME';

    public function __construct(){
        $this->_nom;
    }

    public function __destruct()
    {
        
    }

    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function getNom(){
       return $this->_nom;
    }
}

$apprenant = new Stagiaire();

$apprenant->setNom('Hugo');
// echo $apprenant->getNom();
echo "l'ecole de ".$apprenant->getNom()." est ".$apprenant::ECOLE;