<?php
   include('class_string.php');
   $str=new Chaine("dwwm");
   echo $str->getString().'<br />';
   echo $str->length.'<br />';
   echo $str->charAt(1).'<br />'; 
   echo $str->indexOf("d").'<br />'; 
   echo $str->indexOf("m",2).'<br />'; 
   echo $str->substring(0,2).'<br />'; 
   print_r($str->split("o")).'<br />'; 
   echo $str->toUpperCase().'<br />';
   echo $str->toLowerCase();
?>