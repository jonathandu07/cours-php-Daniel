<?php
//Nous aimreions dès la création d'objet enrichir notre classe eleve de la date de son inscription
//Le constructeur d'une classe est une méthode publique (dans la plupart des cas). 
//Elle est appelée automatiquement au moment de l'instanciation. 
//Elle sert généralement à initialiser les attributs et fournir à l'objet créé tout ce dont il a 
//besoin pour fonctionner. Cette opération d'initialisation est connue sous le nom d'hydratation.


 //***************************************************************************************** 
   
class Eleve {
    private $_prenom;
    public function __construct(){
        $this->dateinscription=date('d/m/Y');
        echo 'les données sont initialisées<br/>';
    }
   
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

  

}

