<?php

namespace Cci\Stagiaires;

class Etudiant
{
    private $_nom;


    public function __construct()
    {
        $this->_nom;
    }


    public function afficheNom()
    {
        return $this->_nom = "Geek";
    }
}
