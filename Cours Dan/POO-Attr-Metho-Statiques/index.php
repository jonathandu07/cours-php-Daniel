<?php

class Facture
{
    private static $_att;
    public function __construct()
    {

        self::$_att = "POO";
    }
    public function __destruct()
    {
    }

    public function affichageAttribut()
    {
        return  self::$_att;
    }

    public function modifierAttribut($val)
    {
        self::$_att = $val;
    }
}

$objet = new Facture;
echo $objet->affichageAttribut() . '<br />';
echo '<br />';
$objet2 = new Facture;
$objet2->modifierAttribut('POO en PHP');
echo $objet2->affichageAttribut() . '<br />';
echo $objet->affichageAttribut() . '<br />';
echo '<br />';
