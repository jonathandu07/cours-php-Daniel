<?php

class Article
{
   private $nom;
   private $prix;

    public function setNom($nomArticle){
        $this->nom=$nomArticle;
    }

    public function setPrix($prixArticle){
        $this->prix=$prixArticle;
    }

    public function ajoutTransport($port1,$port2){
        $this->prix=$this->prix + $port1 + $port2;
    }
    public function getNom(){
        return $this->nom;
    }

    public function getPrix(){
        return $this->prix;

    }


}