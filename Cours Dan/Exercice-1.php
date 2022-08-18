<?php
//Méthode magique __get pour afficher une valeur d'un attribut en private
class Maclasse
{
   private $attribut = "Bonjour";
   public function __get($toto)
   {
      return $this->$toto;
   }
}
$objet = new Maclasse();
echo $objet->attribut . '<br />';


//Méthode magique __set pour modifier une valeur d'un attribut en private
class Maclasse1
{
   private $attribut = "Bonjour";
   public function __get($att)
   {
      return $this->$att;
   }
   public function __set($att, $val)
   {
      $this->$att = $val;
   }
}
$objet = new Maclasse1();
$objet->attribut = "Bonsoir";
echo $objet->attribut . '<br />';

//Méthode magique __isset pour de vérifier si l'attribut existe ou pas 
class Maclasse2
{
   private $attribut = "Bonjour";
   public function __isset($att)
   {
      return isset($this->$att);
   }
}
$objet = new Maclasse2();
if (isset($objet->attribut))
   echo "L'attribut existe<br />";
else
   echo "L'attribut n'existe pas<br />";

//La méthode magique __toString() est appelé automatiquement quand on tente
// de traiter un objet en tant que chaîne de caractères 
//(à l'aide de la structure echo par exemple). Dans ce cas, 
//cette méthode retourne la chaîne de caractères de notre choix.

class Maclasse3
{
   private $str;
   public function __construct($param)
   {
      $this->str = $param;
   }
   public function __toString()
   {
      return $this->str;
   }
}
$objet = new Maclasse3("Bonjour");
echo $objet . '<br />';
