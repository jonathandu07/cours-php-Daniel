<?php
//Je déclare un setter en public (Mutateur) pour modifier la valeur de ma propriété nom de ma classe par la vue

    class Cours
    {
        private $nom;
        private $prix;
        //Public ou private pour visualser le message d'erreur
        public function setNom($nomcours){
            $this->nom=$nomcours;
        }
        public function setPrix($prixcours){
            if(!is_numeric($prixcours)){
                echo 'Attention,c \' est une chaine de caractère ';
            } else {
                $this->prix=$prixcours;
            }
           
        }
        public function getNom(){
            return  $this->nom;
        }
        public function getPrix(){
            return  $this->prix;
        }

    }

