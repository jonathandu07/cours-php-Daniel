<?php

   //Mais supposons que nous voulons quand même conserver le résultat retourné par methode1()
   // dans la classe Mere et l'ajouter au résultat obtenu suite à la surcharge dans la classe Fille.
   // Le code devrait donc ressembler à ceci
   
   class Mere{
      protected $attribut="Bonjour.";
      public function methode1(){
         $str=$this->attribut;
         $str.=" Je suis la classe Mère.<br />";
         return $str;
      }
   }
   //En fait, le résultat de methode1() de la classe Mere a été combiné au résultat de la méthode surchargée
   // dans la classe Fille, et ce, grâce à l'appel statique de methode1() de la classe Mere à l'aide 
   //de l'opérateur de résolution de portée (::).
   //Il est possible à tout moment d'appeler statiquement les méthodes sans avoir besoin de les 
   //déclarer par le mot clé static.
   class Fille extends Mere{
      public function methode1(){
        // $str=Mere::methode1();
         $str=parent::methode1();
         $str.=$this->attribut;
         $str.=" Je suis la classe Fille.<br />";
         return $str;
      }
   }
   $objet=new Fille();
   echo $objet->methode1();

   //En effet, le fait de surcharger la methode1() dans la classe Fille a écrasé son code hérité de la classe Mere.
   // Il est donc normal que seul le code de methode1() redéfinie dans la classe Fille soit exécuté.




 
?>