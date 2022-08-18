<?php
class Voiture{
    private $couleur;
    private $puissance;
    private $vitesse;


    public function __construct($coul,$pui,$vit){
 
       $this->couleur=$coul;
       $this->puissance=$pui;
       $this->vitesse=$vit;

    }
    public function __destruct(){
      echo '</br>Destructeur appelé';
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