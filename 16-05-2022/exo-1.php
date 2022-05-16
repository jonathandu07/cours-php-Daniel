<!-- le code Php se fait généralement en début de page -->
<?php
    $nombre =array('zero','un','deux','5'=>'cinq','moins'=>'-');
    foreach($nombre as $index => $valeur){
        echo($index.'=>'.$valeur."<br/>");
    }

    echo str_repeat("_",150).'<br/>';

    foreach($nombre as $nombre){
        echo($nombre."<br/>");
    }

    $capital=[['France','Paris'],['Italie','Rome'],['Espagne','Madrid']];
    foreach($capital as list($pays,$ville)){
        echo($pays.'=>'.$ville."<br/>");
    }

    foreach($capital as [$pays,$ville]){
        echo($pays.'=>'.$ville."<br/>");
    }
    echo str_repeat("_",150).'<br/>';
    $capital=[['Pays'=>'France','Ville'=>'Paris'],['Pays'=>'Italie','Ville'=>'Rome'],['Pays'=>'Espagne','Ville'=>'Madrid']];
    foreach($capital as list('Pays'=>$pays,'Ville'=>$ville)){
        echo($pays.'=>'.$ville."<br/>");
    }
    echo str_repeat("_",150).'<br/>';
    ?>