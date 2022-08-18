<?php
    class traitement
    {
        private $text;

        public function __construct(){   
            $this->text;
        }

        public function __destruct()
        {
            
        }

        public function setString($text){
            $this->text = $text;
        }

        public function getString(){
            return $this->text;
        }

        public function chartA($pos){
            return substr($this->text, $pos, 1);
        }

        public function textLen(){
            return strlen($this->text);
        }

        public function indexof(){
            return strrpos($this->text, 'A');
        }

        public function subText(){
            return substr($this->text, 2);
        }

        public function tableau(){
            return str_split($this->text, 2);
        }

        public function majuscule(){
            return strtoupper($this->text);
        }

        public function minuscule(){
            return strtolower($this->text);
        }

    }
?>