<?php

class Texte{
    public $chaine;

    public function __construct(){
        $this->chaine="Vive les DWWM";
     }

   	public function __tostring(){
		return $this->chaine;
	}
}