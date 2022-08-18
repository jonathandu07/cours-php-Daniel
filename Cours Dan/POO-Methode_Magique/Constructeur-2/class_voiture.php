<?php
class Voiture{
    private $couleur;
    private $puissance;
    private $vitesse;

//++++++++++++++Exercice 1, attention les propriétés doivent être en public (couleur,puissance, vitesse)*********************

   /* public function __construct(){
       $this->couleur="Rouge";
       $this->puissance=130;
       $this->vitesse=0;
    }*/

       //Exercice 1
    /*
    public function accelerer(){
       echo "Appel de la méthode accelerer()";
    }
    public function ralentir(){
       echo "Appel de la méthode ralentir()";
    }
    ***************************************************************************************************************************/
    public function __construct($coul,$pui,$vit){
 
       $this->couleur=$coul;
       $this->puissance=$pui;
       $this->vitesse=$vit;

    }

    public function accelerer(){
      return $this->vitesse++;
    }
    public function afficherCompteur(){
      return $this->vitesse;
    }
    public function afficherCouleur(){
      return $this->couleur;
    }
    public function afficherPuissance(){
      return $this->puissance;
    }
 
 
 }