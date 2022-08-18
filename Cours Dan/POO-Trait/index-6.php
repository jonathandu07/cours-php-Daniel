<?php
// le problème de PHP est qu'une classe fille ne peut heriter que d'une classe mère.
//Les traits resolevent cela et permet l'heritage de plusieurs classe mère.
//Utilisation d'un trait
trait Ecole
{

    public function apprendre()
    {
        echo " J'adore apprendre PHP<br />";
    }
}

class Apprenant
{
    use Ecole;
}


$stagiaire = new apprenant;
$stagiaire->apprendre();


//utilisation de plusieurs trait
trait Ecoles
{

    public function apprendre()
    {
        echo " J'adore apprendre PHP<br />";
    }
}
trait Entreprises
{
    public function geolocalisation()
    {
        echo "Vous êtes situé sur Valence dans la drôme<br />";
    }
}

class Apprenants
{
    use Ecoles, Entreprises;
}


$stagiaire = new Apprenants;
$stagiaire->apprendre();
$stagiaire->geolocalisation();
