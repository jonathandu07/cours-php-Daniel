<?php

class Text{
    public $chaine;

    public function __construct() {
        $this->chaine ="Vive les DWWM";
    }

    public function __toString() {
        return $this->chaine;
    }
}