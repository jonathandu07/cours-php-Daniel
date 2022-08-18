<?php
//Notions de class, de visibilité public, private et protected
//Un objet possède sa propre structure interne qui définit ses propriétés et son comportement

//Une classe est une structure cohérente de propriétés (attributs) et de comportements (méthodes). 

//C'est elle qui contient la définition des objets qui vont être créés après. En général on considère une classe 
//comme un moule à objets. Avec un seul moule on peut créer autant d'objets que l'on souhaite.

//La classe renferme l'ensemble des propriétés et de méthodes qui servent à définir l'identité de l'objet
// qui en découlera (l'instance de classe).

//La classe renferme l'ensemble des propriétés et de méthodes qui servent à définir l'identité de 
//l'objet qui en découlera (l'instance de classe).

//On appelle l'opération qui consiste à créer un objet instanciation et l'objet ainsi créé 
//peut aussi être appelé instance de classe.

//Appel d'attributs et méthodes ->

   class Voiture{
      private $couleur="Rouge";
      private $puissance;
      private $vitesse;
      public function accelerer(){
         echo "Appel de la méthode accelerer()";
      }
      public function ralentir(){
         echo "Appel de la méthode ralentir()";
      }
   }

   $citadine = new Voiture();
   
   $citadine -> accelerer();
   echo $citadine -> couleur;
?>