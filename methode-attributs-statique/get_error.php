<?php

$a = 10;
$b = 0;

try { // essayer
    if($b==0)
    throw new Exception("<strong>"."Le dénominateur ne doit pas être nul."."</strong>");
    $c = $a / $b;
    echo "<section>".$c."</section>";
}
catch (Exception $e) { // attraper
    $erreur = "Document: ". $e->getfile()."<br />";
    $erreur = "Line: ". $e->getline()."<br />";
    $erreur = "Code d'erreur: ". $e->getCode()."<br />";
    $erreur = "Message d'erreur: ". $e->getMessage()."<br />";

    echo "<section>".$erreur."</section>";
}