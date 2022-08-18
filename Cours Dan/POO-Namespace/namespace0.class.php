<?php

namespace Cci\Dwwm; // syntaxe CamelCase


class Calculer
{
    private $_nom;
    private $_dte;
    public function __construct()
    {
        $this->_nom;
        $this->_dte = date('d-m-Y');
    }
    public function affichageNom()
    {
        return $this->_nom = "Daniel";
    }
    public function affichageDate()
    {
        return $this->_dte;
    }
}



//Nous n'avons pas de colli.sion par rapport à la fonction ucfirst car le nom de la methode esl la même.Cela parce que nous sommes à l'intérieur du namespace monEspace.
