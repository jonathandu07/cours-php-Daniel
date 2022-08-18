<?php
$a = 10;
$b = 0;
try {
    if ($b == 0)
        throw new Exception("Le dénominateur ne doit pas être nul.", "553");
    $c = $a / $b;
    echo $c;
} catch (Exception $e) {
    $erreur = "Document: " . $e->getFile() . "<br />";
    $erreur .= "Line: " . $e->getLine() . "<br />";
    $erreur .= "Code d'erreur: " . $e->getCode() . "<br />";
    $erreur .= "Message d'erreur:" . $e->getMessage() . "<br />";
    echo $erreur;
}
