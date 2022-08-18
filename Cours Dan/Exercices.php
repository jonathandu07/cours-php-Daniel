<?php
//-------------------------------Exercice 1 Private et public
/*class Tester{
    public $texte="toto";

}

$resultat=new Tester();

echo $resultat->texte;*/

//-------------------------------Exercice 2 
/*
class Voiture{
    private $couleur="Rouge";
    private $puissance;
    private $vitesse;

    public function affichageCouleur(){
          return $this->couleur;
    }
  
 }
 
$citadine =new Voiture();
echo $citadine->affichageCouleur();*/
////-------------------------------Exercice 2-0 

class Voiture{
    private $couleur="Rouge";
    private $puissance;
    private $vitesse = 0;

    public function affichageCouleur(){
          return $this->couleur;
    }
  public function modifierCouleur($modifierCouleur){
    $this->couleur=$modifierCouleur;
  }
  public function accelerer(){
    return $this->vitesse++;
  }
  public function afficherCompteur(){
    return $this->vitesse;
  }
 }
 
$citadine =new Voiture();
echo $citadine->affichageCouleur();
echo $citadine->modifierCouleur("orange");
echo $citadine->affichageCouleur();

$citadine->accelerer();
$citadine->accelerer();
$citadine->accelerer();
echo $citadine->afficherCompteur();


//-------------------------------Exercice 2-1 
/*class Tester{
    Private $texte="toto";
    //Hydratation - Constructeur
    public function __construct(){
         echo $this->texte;
    }
}

$resultat=new Tester();*/

//-------------------------------Exercice 3

/*class Voiture{
    Private $texte;
    private $couleur;
    //Hydratation - Constructeur
    public function __construct(){
         echo $this->texte ="titi<br />";
         echo $this->couleur="rouge<br />";
    }
}

$resultat=new Voiture();*/

//-------------------------------Exercice 4 - Setter
/*
//Je déclare un setter en public (Mutateur) pour modifier la valeur de ma propriété nom de ma classe par 
//la vue

class Cours
{
    private $nom;
    private $prix;
    //Public ou private pour visualser le message d'erreur
    public function setNom($nom){
        return $this->nom=$nom;;
    }<

}
$cour=new Cours();
echo $cour->setNom("Indesign");*/

//-------------------------------Exercice 4 - Setter et getter


//Je déclare un setter en public (Mutateur) pour modifier la valeur de ma propriété nom de ma classe par la vue

/*class Cours
{
    private $nom;
    private $prix;
    //Public ou private pour visualser le message d'erreur
    public function setNom($nomcours){
        $this->nom=$nomcours;
    }
    public function getNom(){
        return  $this->nom;
    }

}

$cour=new Cours();
$cour->setNom("Photoshop");
echo $cour->getNom();*/






