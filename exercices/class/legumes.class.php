<?php

class Legumes
{
    private $_nom;
    private $_quantite;
    private $_prix;

    public function __construct(){
        $this->_nom;
        $this->_quantite;
        $this->_prix;
    }

    public function __destruct()
    {
        
    }

    public function setChoix($choix){

        $this->_nom = $choix;
    }

    public function getChoix(){

        return  $this->_nom;
    }

    //##########################

    public function setQuantite($quantite){

        $this->_quantite = $quantite;
    }

    public function getQuantite(){

        
        return $this->_quantite;
    }

    //######################

    public function setPrix($prix){

        $this->_prix = $prix;
    }

    public function getPrix(){

        return $this->_prix;
    }

        //######################

        public function Total(){

            return ($this->_prix)*($this->_quantite);
        }
    


}