<?php

$a = 10;
$b = 0;

try { // essayer
    if($b==0)
    throw new Exception("<section>"."Le dénominateur ne doit pas être nul."."</section>");
    $c = $a / $b;
    echo $c;
}
catch (Exception $e) { // attraper
    echo $e->getMessage();
}