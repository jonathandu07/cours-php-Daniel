<?php

namespace Cci\Hightschool;

class Etudiant
{
    private $_nom;
    private $_date;

    public function __construct(){
        $this->_nom;
        $this->_date=date('d-m-Y');
    }

    public function __destruct(){

    }

    public function AffichageNom(){
        return $this->_nom="Bohemond";
    }

    public function AffichageDate(){
        return $this->_date;
    }
}