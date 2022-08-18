<?php

class Facture
{
    const TVA=20;
    private static $_att;
    private  $_att2;
    
    public function __construct()
    {
        self::$_att="POO";
        $this->_att2;
    }

    public function __destruct()
    {
        
    }

    public static function montantTtc($ht)
    {
        return $ht*(1+self::TVA/100);
    }

    public function affichageAttrbut(){
        return self::$_att;
    }

    public function modifieAttrbut($val){
        self::$_att=$val;
    }

    //  seconde partie

    public function affichageAttrbut2(){
        return $this->_att2;
    }

    public function modifieAttrbut2($val){
        $this->_att2=$val;
    }
}
