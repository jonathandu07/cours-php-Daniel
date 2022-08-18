<?php

class Livres{
    private $titre;
    private $auteur;
    private $editeur;
    private $thematique;
    private $prixHT;

    const TVA = 20;

    public function __construct($titre,$auteur,$editeur, $thematique,$prixHT){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->editeur = $editeur;
        $this->thematique = $thematique;
        $this->prixTTC = $prixHT + $prixHT * self::TVA /100;
    }

    public function __toString(){
        $txt = "";
        $txt .= "Titre du livre : " .$this->titre. "<br />";
        $txt .= "Auteur du livre : " .$this->auteur. "<br />";
        $txt .= "Editeur du livre : " .$this->editeur. "<br />";
        $txt .= "Thématique du livre : " .$this->thematique. "<br />";
        $txt .= "Prix TTC du livre : " .$this->prixTTC. ",00 €<br />";
        return $txt;
        
    }

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre=$titre;}

    public function getAuteur(){return $this->auteur;}
    public function setAuteur($auteur){$this->auteur=$auteur;}

    public function getEditeur(){return $this->editeur;}
    public function setEditeur($editeur){$this->editeur=$editeur;}

    public function getThematique(){return $this->thematique;}
    public function setThematique($thematique){$this->thematique=$thematique;}

    public function getPrix(){return $this->prixHT;}
    public function setPrix($prixHT){$this->prixHT=$prixHT;}
}



$l1 = new Livres("PHP","Sandrine","Dunod","Informatique", 45);
$l2 = new Livres("HTML","Didier","Eyrolles","Informatique", 35);
$l3 = new Livres("CSS","Sandrine","Eyrolles","Informatique", 25);

echo $l1.'<br/>';
echo $l2.'<br/>';
echo $l3.'<br/>';

//Travail à faire pour les apprenants, ajouter un tableau et le balayer pour afficher les informations de l1,l2 et l3


$tab = [$l1,$l2,$l3];

for($i = 0; $i < count($tab); $i++){
    echo $tab[$i];
    echo " <br />";
}

//recherche des titres de livre suivant l'auteur
afficherTitreAuteur($tab, "Sandrine");

function afficherTitreAuteur($tab , $auteur){
    echo "<br />";
    echo "Voici les titres de l'auteur : ". $auteur . "<br />";
    for($i = 0; $i < count($tab); $i++){
        if($tab[$i]->getAuteur() === $auteur){
            echo $tab[$i];
        }
    }
}


    




?>