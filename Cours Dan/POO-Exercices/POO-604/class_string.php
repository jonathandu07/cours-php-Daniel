<?php
   class Chaine{
      private $str;
      private $length;
      public function __construct($chaine){
         $this->str=$chaine;
         $this->length=strlen($this->str);
      }
      public function getString(){
         return $this->str;
      }

      
      public function __toString(){
         return $this->str;
      }
      
      public function __get($param){
         return $this->$param;
      }
      public function charAt($pos){
         return substr($this->str,$pos,1);
      }

      public function indexOf($car,$pos=0){
         $existe="non";
         for($i=0;$i<$this->length;$i++){
            if(substr($this->str,$i,1)==$car && $i>=$pos){
               $existe="oui";
               return $i;
            }
         }
         if($existe=="non")
            return -1;
      }

      public function substring($deb,$fin){
         return substr($this->str,$deb,$fin-$deb);
      }
      public function split($occ){
         $tab=explode("$occ",$this->str);
         return $tab;
      }
      public function toUpperCase(){
         return strtoupper($this->str);
      }
      public function toLowerCase(){
         return strtolower($this->str);
      }
   }

   
?>