<?php

namespace monEspace;


echo "<br />";
function ucfirst($str)
{
    echo "_" . $str . '<br />';
    echo __NAMESPACE__;
}
ucfirst("Bonjour");

namespace daniel;

echo "<br />toto";

//Nous n'avons pas de colli.sion par rapport à la fonction ucfirst car le nom de la methode esl la même.Cela parce que nous sommes à l'intérieur du namespace monEspace.
