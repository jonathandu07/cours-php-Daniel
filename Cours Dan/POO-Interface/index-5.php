<?php
//Ils permettent de minimiser le code en réutilisant des méthodes deja déclarées sans être obligé d'hériter d'une classe entière
//Les methodes doivent automatiquement être déclarées à partir de la classe qui est implémentée de l'interface
//Cela vous permet de contrôler également le nom de vos méthodes
interface Test
{
    public function Method1();
    public function method2();
    public function method3();
}

class Cci implements Test
{

    public function Method1()
    {
        echo "appel method1<br />";
    }

    public function method2()
    {
        echo "appel method2<br />";
    }
    public function method3()
    {
        echo "appel method3<br />";
    }
}

$objet = new Cci;
$objet->method1();
$objet->method2();
$objet->method3();
