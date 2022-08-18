<?php
//Les principes de l'encapsulation en POO

   include('cours_class.php');
   $cour=new Cours();
   $prix=new Cours();
   // Setter muttateur & Getter Assesseur
   $cour->setNom("Indesign");
   echo $cour->getNom().'<br />';

   $prix->setPrix(25);
   echo $prix->getPrix().'<br />';
   
?>

