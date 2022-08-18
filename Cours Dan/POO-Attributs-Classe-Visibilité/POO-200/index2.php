<?php
   require('class_stagiaire.php');
// On crée une instance de la classe eleve
   $stagiaire=new stagiaire;
//Acceder aux méthodes de la classe eleve et sa propriété
   $stagiaire->setModifier_stagiaire('DUBIEF');
   echo $stagiaire->getAfficher_stagiaire();
  

?>