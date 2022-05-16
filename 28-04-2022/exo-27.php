<?php
for($i=0;$i<=20; $i++){
  $modulo=$i%5;
if ($modulo == 0){
    continue; 
}
echo ($i."</br>"); 
}
$tableau[0]="Ain";
$tableau[1]="Ardeche";
$tableau[2]="Suisse";
$tableau[4]="Drome";
$tableau[5]="Limousin";

foreach($tableau as $departement => $num){
    if("L" == $tableau[$departement][0]){
        continue;
    }
    echo (strtolower($num."</br>"));

}
?> 