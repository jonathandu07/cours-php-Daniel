<?php

class Cours
{
    private $cours;
    private $prix;

    public function __construct()
    {
        $this->cours;
        $this->prix;
    }

    public function __destruct()
    {
        // unset($this->cours);
        // unset($this->prix);
    }

    public function setCours($modifier){
        return $this->cours = $modifier;
    }

    public function getCours(){
        return $this->cours;
    }
}

$cursus = new Cours();
$cursus -> setCours('PHP');
echo $cursus->getCours();