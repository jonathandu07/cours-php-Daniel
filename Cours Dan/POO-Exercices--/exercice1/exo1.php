<?php 
class Personnage{
    private $nom;
    private $classe;
    private $attaque;
    private $pv;
    private $forceDuBien;

    public function __construct($nom,$classe,$attaque,$pv,$forceDuBien)
    {
        $this->nom = $nom;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->forceDuBien = $forceDuBien;
    }

    private function calculDegat(){
        return $this->pv / 100 * $this->attaque +1;
    }

    public function afficherDegat(){
        echo "Dégat infligés : ". $this->calculDegat(). " dégats <br />";
    }
}

$perso1 = new Personnage("Milo","Guerrier",10,100,true);
$perso2 = new Personnage("Tya","Archère",5,50,true);
$perso3 = new Personnage("Lili","Archère",5,55,false);
$perso4 = new Personnage("Gael","Voleur",2,10,false);
$perso1->afficherDegat();
$perso2->afficherDegat();
$perso3->afficherDegat();
$perso4->afficherDegat();

?>