<?php

class Legumes
{
    private $_nom;
    private $_prix;
    private $_quantite;

    public function __construct()
    {
        $this->_nom;
        $this->_prix;
        $this->_quantite;
    }

    public function setNom($nomLegume)
    {
        $this->_nom = $nomLegume;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function setPrix($prixLegume)
    {
        $this->_prix = $prixLegume;
    }

    public function getPrix()
    {
        return $this->_prix;
    }
    public function setQte($qteLegume)
    {
        $this->_quantite = $qteLegume;
    }
    public function getQte()
    {
        return $this->_quantite;
    }
    public function calculer()
    {
        return $this->_prix * $this->_quantite;
    }
}
