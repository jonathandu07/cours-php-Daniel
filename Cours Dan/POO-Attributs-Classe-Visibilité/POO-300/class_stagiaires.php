<?php 
class stagiaires{
    private $nom;
    public function setRecuperer($Nom){
        $this->nom=$Nom;
    }
    public function getAfficher(){
        return $this->nom;
    }
}
?>