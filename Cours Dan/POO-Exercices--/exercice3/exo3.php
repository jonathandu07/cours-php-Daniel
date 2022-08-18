<?php

class Voiture{
    private $marque;
    private $modele;
    private $couleur;
    private $nbPortes;
    private $estElectrique;

    public function __construct(){}

    public function hydrate($marque,$modele,$couleur){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->nbPortes = 5;
        $this->estElectrique = false;
    }

    public function afficherVoiture(){
        echo "Marque : " .$this->marque. "<br />";
        echo "Modele : " .$this->modele. "<br />";
        echo "Couleur : " .$this->couleur. "<br />";
        echo "NbPortes : " .$this->nbPortes. "<br />";
        if($this->estElectrique){
            echo "La voiture est electrique <br />";
        } else {
            echo "La voiture n'est pas electrique <br />";
        }
        
    }

    public function getMarque(){return $this->marque;}
    public function setMarque($marque){$this->marque=$marque;}

    public function getModele(){return $this->modele;}
    public function setModele($modele){$this->modele=$modele;}

    public function getCouleur(){return $this->couleur;}
    public function setCouleur($couleur){$this->couleur=$couleur;}

    public function getNbPortes(){return $this->nbPortes;}
    public function setNbPortes($nbPortes){$this->nbPortes=$nbPortes;}

    public function getEstElectrique(){return $this->estElectrique;}
    public function setEstElectrique($estElectrique){$this->estElectrique=$estElectrique;}
}

$v1 = new Voiture();
$v1->hydrate("Yotota","Ryas","noir");
$v1->setEstElectrique(true);

$v2 = new Voiture();
$v2->hydrate("Yotota","Risau","rouge");
$v2->setNbPortes(3);

$v3 = new Voiture();
$v3->hydrate("Troen","5C","rouge");
$v3->setEstElectrique(true);

$tab = [$v1,$v2,$v3];

for($i = 0; $i < count($tab); $i++){
    $tab[$i]->afficherVoiture();
}

afficherVoitureMarque($tab, "Troen");

function afficherVoitureMarque($tab , $marque){
    echo "*********************** <br />";
    echo "Voici les voitures de la marque ". $marque . "<br />";
    for($i = 0; $i < count($tab); $i++){
        if($tab[$i]->getMarque() === $marque){
            $tab[$i]->afficherVoiture();
        }
    }
}

?>