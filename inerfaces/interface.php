<?php
// Ils permetent de minimiser le code en réutilisant des méthodes dejà déclarées sans être obligé d'hériter d'une classe entière
// les méthodes doivent automatiquement être déclarées à partir de la classe qui est omplémentée de l'interface
// Cela vous permet de controler également le nom de vos méthodes

interface Test
{
    public function Method1();
    public function method2();
    public function method3();
}

class Cci implements Test
{
    public function Method1(){
        echo "appel method1"."<br/>";
    }

    public function method2(){
        echo "appel method2"."<br/>";
    }

    public function method3(){
        echo "appel method3"."<br/>";
    }

    
}