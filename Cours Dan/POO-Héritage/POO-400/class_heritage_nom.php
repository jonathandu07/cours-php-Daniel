<?php
//Création d'une classe qui sera une classe fille de la classe stagiaire
class stagiaire_fille extends stagiaire{
    private $_age;
    public function setNom($nom){
        $this->_nom=ucfirst($nom);

    }
    public function setAge($age){
        $this->_age=$age;
    }
    public function getAge(){
        return $this->_age;
    }

}


?>