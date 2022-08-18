<?php
//Dans l'exemple précédent où la classe Fille hérite de la classe Mere, 
//il est possible de définir une méthode du nom de methode1() dans la classe Fille.
//Bien entendu, cette méthode figure déjà dans la classe Mere et elle est supposée être héritée elle 
// aussi car elle est publique
//Le fait de déclarer une méthode du même nom dans la classe Fille s'appelle redéfinition 
//de méthode ou surcharge de méthode.
final class Mere
{
   private $attribut = "Bonjour.";
   public function methode1()
   {
      $str = $this->attribut;
      $str .= " Je suis la classe Mère.<br />";
      return $str;
   }
}

//Surcharge de méthode
class Fille extends Mere
{
   public function methode1()
   {
      $str = parent::methode1();
      $str .= $this->attribut;
      $str .= " Je suis la classe Fille.<br />";
      return $str;
   }
}
//En effet, le fait de surcharger la methode1() dans la classe Fille a écrasé son code hérité de la classe Mere.
// Il est donc normal que seul le code de methode1() redéfinie dans la classe Fille soit exécuté.

$objet = new Mere();
echo $objet->methode1();
   //Mais supposons que nous voulons quand même conserver le résultat retourné par methode1() dans la classe Mere 
   //et l'ajouter au résultat obtenu suite à la surcharge dans la classe Fille. Le code devrait donc ressembler
   // à ceci:
