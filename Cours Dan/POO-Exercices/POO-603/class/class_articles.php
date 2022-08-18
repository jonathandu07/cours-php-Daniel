<?php

class Articles
{
private $nom;
private $prix;
private static $port= 20;

public function setNom($nom){
    $this->nom=$nom;
}

public function setPrix($prix){
    if(!is_numeric($prix)){
        echo 'Il y a une erreur sur le prix';
    }else{
        $this->prix=$prix;
    }
}

public function getAjoutTransport(){
        return $this->prix+Articles::$port;
    }


public function getNom(){
    return $this->nom;
}

public function getPrix(){
    return $this->prix;
}

}