<?php
   include('class_string.php');
   $str=new Chaine("dwwm");
   echo $str->getString().'<br />';
   echo $str->length.'<br />'; // Retourne le nombre de caractère
   echo $str->charAt(1).'<br />'; // Retourne le caractère à la position de X
   echo $str->indexOf("d").'<br />'; // Retourne la position du caractère
   echo $str->indexOf("m",2).'<br />'; // Retourne la position du caractère à partir de la position  2
   echo $str->substring(0,2).'<br />'; // Retourne une partie de la chaine à partir de 0 et seterminant à 2
   print_r($str->split("o")).'<br />'; // Retourne un tableau Array([0]=>B[1]=>nj[2]=>ur)
   echo $str->toUpperCase().'<br />'; // Retourne la chaine en majuscule
   echo $str->toLowerCase(); // Retourne bonjourla chaine ne minuscule
?>