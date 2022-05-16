<?php
 function additioner($val1, $val2){
    return $val1 + $val2;
 }


 function diviser($val1, $val2){
    return $val1 / $val2;
 }

 function multiplier($val1, $val2){
    return $val1 * $val2;
 }

 function soustraire($val1, $val2){
    return $val1 - $val2;
 }

//  seconde partie

 if (isset($_POST['val1'])&isset($_POST['val2'])&isset($_POST['operation'])){
  $val1 = $_POST['val1'];
  $val2 = $_POST['val2'];
  $operation = $_POST['operation'];
 
  if ( is_numeric( $val1 )&is_numeric( $val2 )){
      if( $operation != null )
      {
          switch( $operation )
          {
              case "add" : $result = additioner($val1,$val2); break;
              case "mul" : $result = multiplier($val1,$val2); break;
              case "sous" : $result = soustraire($val1,$val2); break;
              case "div" : $result = diviser($val1,$val2); break;
          }
        echo( "Résultat de Calcul:<b> $result</b>" );
      }
  }
  else
  {
    echo( "Données invalide, veillez ré-essayer ");
  }
 
  }

?>