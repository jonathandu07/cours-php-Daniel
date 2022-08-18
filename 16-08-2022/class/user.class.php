<?php
class User
{
    private $nom;
    // private $age;
    // private $sexe;

    public function __construct()
    {
        $this->nom;
        $this->age;
        $this->sexe;
    }

    public function __destruct()
    {
        
    }

    public function setNom($modifierNom){
         $this->nom = $modifierNom;
    }

    public function setAge($modifierAge){
         $this->age = $modifierAge;
    }

    public function setSexe($modifierSexe){
         $this->sexe = $modifierSexe;
    }

        public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSexe(){
        return $this->sexe;
    }
}
?>