<?php
class Livre {
    public $titre;
    public $nbPages;
    private $couleurCouverture;
    private $estTraduitEnAnglais;

    public function __construct($nom,$nb,$couleur,$traduction)
    {
        $this->titre = $nom;
        $this->nbPages = $nb;
        $this->couleurCouverture = $couleur;
        $this->estTraduitEnAnglais = $traduction;
    }

    public function setCouleurCouverture($couleur){
        $this->couleurCouverture = $couleur;
    }

    private function traductionAnglaise(){
        $this->estTraduitEnAnglais = true;
    }

    public function afficherLivre(){
        echo "Livre : ". $this->titre. "<br />";
        echo "Nb pages : : ". $this->nbPages. "<br />";
        echo "Couverture : ". $this->couleurCouverture. "<br />";
        if($this->estTraduitEnAnglais){
            echo "Livre traduit en anglais";
        } else {
            echo "Livre non traduit en anglais";
        }
        echo "<br />";
    }

    public function ajouterPages($nbAAjouter){
        $this->nbPages += $nbAAjouter;
    }

    public function basculerEnAnglais(){
        $this->traductionAnglaise();
        $this->ajouterPages(5);
        $this->setCouleurCouverture("verte");
    }
}

$livre1 = new Livre("L'algorithmique selon H2PROG",500,"noir",false);
$livre1->afficherLivre();
echo "************<br/>";
$livre1->titre = "Algo H2PROG";
$livre1->nbPages = 10;
$livre1->ajouterPages(10);
$livre1->setCouleurCouverture("rose");
$livre1->basculerEnAnglais();
$livre1->afficherLivre();
?>