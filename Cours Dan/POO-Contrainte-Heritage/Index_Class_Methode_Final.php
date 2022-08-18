<?php
//Classes et méthodes finales (Mot clé final)
//Une classe finale est une classe dont on ne peut pas hériter.
//Il faut donc l'instancier directement.
// Pour définir une classe finale il suffit de la précéder par le mot clé final.

//Exemple

   final class A{
      public function methode(){
         echo "Bonjour";
      }
   }
   class B extends A{
   }
   $objet=new B();
   $objet->methode();

   //En effet, l'héritage d'une classe finale est interdit.
?>