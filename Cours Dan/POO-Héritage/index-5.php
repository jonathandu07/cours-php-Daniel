<?php
//L'héritage est un concept fondamental de la POO. C'est d'ailleurs l'un des plus importants
//puisqu'il permet de réutiliser le code d'une classe autant de fois que l'on souhaite tout 
//en ayant la liberté d'en modifier certaines parties
//On aimerai que la classe fille herite de tous les membres (attributs et methodes) qui constituent
// la classe mere
class Mere
{
   //private $attribut="Bonjour."; // Pas héritage bonjour a ce momment là en private
   protected $attribut = "Bonjour.";
   public function methode1()
   {
      $str = $this->attribut;
      $str .= " Je suis la classe Mère.";
      return $str;
   }
}
class Fille extends Mere
{
   public function methode2()
   {
      $str = $this->attribut;
      $str .= " Je suis la classe Fille.";
      return $str;
   }
}
//La classe fille herite de la classe mère
$objet = new Fille();
echo $objet->methode1();
echo "<br />";
echo $objet->methode2();
