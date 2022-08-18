<?php
class etudiant{
    private $nom;
    private $age;
    private $sexe;

    public function __construct($nom,$age,$sexe){
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function getSexe(){
        return $this->sexe;
    }
    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function __toString()
    {
        $txt = "";
        $txt .= "Bonjour, c'est moi " . $this->nom. "<br />";
        $txt .= "Mon age est de :  " . $this->age. " ans<br />";
        $txt .= ($this->sexe) ? "Je suis un homme<br/>" : "Je suis une femme<br/>";
        $txt.="-------------------------------------------------------------------<br/>";
        return $txt;
    }
}

$perso1 = new etudiant("Sandrine",48,false);
$perso2 = new etudiant("Daniel",54,true);
echo $perso1;
echo $perso2;


?>