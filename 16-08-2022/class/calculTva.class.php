<?php
 class TVA
 {
    private $_ttc;
    private $_ht;
    const TVA=1.20;

    public function __construct(){
        $this->_ttc;
        $this->_ht;
    }

    public function __destruct()
    {
        
    }

    public function setTva($prixht){

        $this->_ht = $prixht;
    }

    public function setAvecTva(){

        $this->_ttc = $this->_ht * self::TVA;
    }

    public function getTva(){

       return $this->_ht;
    }

    public function getAvecTva(){

        return $this->_ttc;
    }

 }
?>