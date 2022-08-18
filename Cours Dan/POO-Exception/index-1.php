<?php
$a = 10;
$b = 0;
try { //Essayer
    if ($b == 0)
        throw new Exception("Le dénominateur ne doit pas être nul.");
    $c = $a / $b;
    echo $c;
} catch (Exception $e) { //Attraper
    echo $e->getMessage();
}
