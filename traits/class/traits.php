<?php

// Le problème en PHP concernant l'héritage et qu'une classe fille ne peut hériter que d'une classe mère

// Les traits permettent de résoudre cette problématique



trait Ecole
{
    public function Apprendre(){
        echo "j'adore apprendre le PHP";
    }
}

trait Entreprise
{
    public function Geolocalisation(){
        echo "Vous êtes situés sur Valence, dans la Drôme;<br/>";
    }
}

class Apprenant
{
    use Ecole,Entreprise;
}

