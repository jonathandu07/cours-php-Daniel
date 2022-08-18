<?php
 //Classes et méthodes abraites ( mot clé abstact )
 // Une classe abstraite et une classe dont on doit impérativement hériter.
 // Autrement dit, on ne peut pas l'instancier directement.
 // Pour ce faire, on définit la classe abstraite à l'aide du mot clé abstract

abstract class A
{
    public function  methode(){
        echo "Bonjour";
    }
}

class B extends A
{
}