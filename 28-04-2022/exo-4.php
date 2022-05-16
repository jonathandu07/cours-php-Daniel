<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccs/main.css">
    <title>Mi primera pagina en PHP</title>
</head>

<body>
    <p>
        <?php
        // affectation par valeur
        $mavar1="Paris";
        echo $mavar1."<br/>";

        $fruit="poire";
        echo "une $fruit ne coute pas cher <br/>";
        echo "deux {$fruit}s ne coute pas cher <br/>";
        echo "deux $fruit s ne coute pas cher <br/>";
        echo "deux ${fruit}s ne coute pas cher <br/>";
        echo "deux .$fruit.s ne coute pas cher <br/>";

        // affectation par valeur

        $x=1;
        $y=$x;
        echo $y. "<br/>";
        echo $y. "<br/>";

        $x=2;
        echo $x. "<br/>";
        echo $y. "<br/>";

        // affectation par valeur sur trois variables

        $x=$y=$z=0;

        echo $x."<br/>";
        echo $y."<br/>";
        echo $z."<br/>";

        
        // affectation par variable par référence

        $val1 ="Titi";
        $val2 =&$val1;
        echo $val1."<br/>";
        echo $val2."<br/>";
        $val2 ="gros Minet";

        echo $val1."<br/>";
        echo $val2."<br/>";

        $sous="10 <br/>";
        $andro="Andro a: ".$sous."<br/>";
        echo $andro;

        $fortune = &$sous;
        $andro="Andro a: ".$fortune."<br/>";
        echo $andro;

        $fortune="90 euros";
        $fortune = &$sous;
        $andro="Andro a: ".$sous."<br/>";
        echo $andro;
        
        // déclaration d'une constante

        define("PI", 3.14159265358979323846264338327950288419716939937510582);
        $rayon = 10;
        $aire=$rayon*$rayon*PI;

        echo $aire;

        // les opérateurs aritmétiques

        $x=5;
        $y=3;

        echo $x + $y."<br/>";
        echo $x - $y."<br/>";
        echo $x * $y."<br/>";
        echo $x / $y."<br/>";
        echo $x % $y."<br/>";
        echo $x ** $y."<br/>"; 
        // exponnentiel **
        
        //  il incrémente de 1 ) chaque fois par contre on visualisue de un à chaque fois
        echo $x++;
        echo $x;

        echo $x--;

        echo $x;

        echo $x--;

        // les opérateurs combinés

        $val1=5;
        $val1=$val1 +1;
        echo $val1."<br/>";
        // 
        $val1=5;
        $val1 +=1;
        echo $val1."<br/>";

        $val1=5;
        $val1 -=1;
        echo $val1."<br/>";

        // $toto=5;
        // $val2 = "1toto";
        // $total = $toto + $val2;
        // echo $total."<br/>";

        






        ?>

    </p>
</body>

</html>
