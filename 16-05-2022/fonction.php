<?php
    function geek(){
        $valeur=10;
        echo "vous avez saisi la valeur: ". $valeur."<br/>";
        return $valeur;
    }

    echo geek();
echo("<br/>");
str_repeat("_",70);
echo("<br/>");
    $valeur1 = 10;
    $valeur2 =14;
    
    function calculer($valeur1, $valeur2){
        return $valeur1 * $valeur2;
    }

    echo calculer($valeur1, $valeur2);
    echo("<br/>");
    str_repeat("_",70);
    echo("<br/>");

    function cal($valeur1, $valeur2){
        return $valeur1 * $valeur2;
    }

    echo cal(50, 20);
    echo("<br/>");
    str_repeat("_",70);
    echo("<br/>");

    function calcul($x, $y){
        return $x / $y;
    }

    echo calcul(5, 2.0111);
    echo("<br/>");
    str_repeat("_",70);
    echo("<br/>");

    $y = 2;
    echo calcul(46, 7);
    // fonction sans stactique

    function sans_static(){
        $a=0;
        $a+=1;
        echo $a;
    }

    sans_static();
    sans_static();
    sans_static();

    // fonction avec_static

    function avec_stactic(){
        static $a;
        $a+=1;
        echo $a."<br/>";
    }

    avec_stactic();
    avec_stactic();
    avec_stactic();

?>