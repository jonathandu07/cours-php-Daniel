<?php

namespace Cci\Dwwm;

class Etudiant
{
    private $_nom;
    private $_dte;

    public function __construct()
    {
        $this->_nom;
        $this->_dte = date('d-m-Y');
    }

    public function afficheNom()
    {
        return $this->_nom = "Toto";
    }
    public function afficheDate()
    {
        return $this->_dte;
    }
}
