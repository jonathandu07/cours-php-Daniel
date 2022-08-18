<?php

//Exercice 1 Constante 
//Constante de classe - Exercice Stagiaire - Opérateur de résolution de portée
class Facture
{
    const TVA = 20;
    public function montantTTC($ht)
    {
        return $ht * (1 + Facture::TVA / 100);
        //return $ht *(1 + self::TVA/100);
    }
}
echo Facture::TVA . '<br />'; //On accéde à la classe de l'extérieur de la classe
$facture1 = new Facture();
echo $facture1->montantTTC(520) . '<br/>';

//Exercice 2  Methode Statique 
// utilisation d'une methode static pour ne pas faire référence à une instansation de classe

class Factures
{
    const TVA = 20;
    public static function montantTTC($ht)
    {
        return $ht * (1 + Facture::TVA / 100);
        //return $ht *(1 + self::TVA/100);
    }
}
//Utilisation de résolution de portée permet un accés statique à notre methode
echo Factures::montantTTC(520) . '<br/>';

//Exercice 3 Attribut statique  
// utilisation d'un attribut static 

class Fact
{
    const TVA = 20;
    private static $att;

    public function __construct()
    {
        self::$att = "POO";
    }
    public static function montantTTC($ht)
    {
        return $ht * (1 + Fact::TVA / 100);
        //return $ht *(1 + self::TVA/100);
    }
    public function afficherAttribut()
    {
        return self::$att;
    }
    public function modifierAttribut($val)
    {
        self::$att = $val;
    }
}
//Utilisation de résolution de portée, l'attribut statique n'appartient pas à l'instance de classe mais bien à la classe
$objet = new Fact();
$pbjet2 = new Fact();
echo $objet->afficherAttribut() . '<br/>';
$objet->modifierAttribut('POO EN PHP');
echo $objet->afficherAttribut() . '<br/>';
echo $objet2->afficherAttribut() . '<br/>';
