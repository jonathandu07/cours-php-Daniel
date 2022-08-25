
<?php
//Classes et méthodes abstraites (Mot clé abstract)
//Une classe abstraite et une classe dont on doit impérativement hériter. 
//Autrement dit, on ne peut pas l'instancier directement. 
//Pour ce faire, on définit la classe abstraite à l'aide du mot clé abstract


 class A
{
   public function methode()
   {
      echo "Bonjour";
   }
}
class B extends A
{
   public function metho(){
      
   }
}
$objet1 = new A;
$objet1->methode();
$objet = new B();
$objet->methode();
