<?php
// Mutateur -> Setter = Modifier les valeurs des propriétés
// Assesseur -> Getter = Afficher  les valeurs des propriétés

    class stagiaire
    {
        private $nom;
        // Création d'un mutateur pour modifier la valeur de la propriété Setter
        public function setModifier_Stagiaire($Nom){
            $this->nom=$Nom;
           
        }
        // Création d'un assesseur pour afficher la valeur de la propriété Getter
        public function getAfficher_Stagiaire(){
            return $this->nom;
        }

    }


