<?php
class Calculatrice
{
    private $valeur1;
    private $valeur2;
    private $resultat;
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function __destruct()
    {
        
    }

    public function setValeur($valeur1, $valeur2)
    {
       return $this->valeur1 = $valeur1;
       return $this->valeur2 = $valeur2;
        
    }

    public function getValeur($valeur1, $valeur2)
    {
        return $this->valeur1 = $valeur1;
        return $this->valeur2 = $valeur2;
    }

}
?>