<?php

class Mere
{
    protected $_attribut="Bonjour";

    public function methode1(){
        $str = $this->_attribut;
        $str.=" je suis la classe mère";

        return $str;
    }
}

class Fille extends Mere
{
    public function  methode1(){

        $str = Mere::methode1();
        $str .= $this->_attribut;
        $str.=" je suis la classe fille";

        return $str;
    }
}