<?php
    class stagiaire{
        protected $_nom;
        public function setNom($nom){
          $this->_nom=$nom;  
        }
        public function getNom(){
          return $this->_nom;
        }
     }

