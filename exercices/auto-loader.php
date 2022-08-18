<?php

spl_autoload_register(function($class){
    include('class/'.$class.'.class.php');
    
});

$texte = new Text();
echo $texte.'<br/>';

$valeur = new Valeur();
echo $valeur->getAffichage();
?>
