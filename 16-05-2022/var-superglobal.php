<?php
    $tableau=array("a que coucou","les Geeks DWWM");
    echo implode("/",$tableau );

    $chaine=explode("/","a que coucou / les Geeks DWWM");
    foreach($chaine as $valeur){
        echo $valeur."<br/>";
    }

    $position =strpos("a que coucou",'u');
    if ($position == 3){
        header("location:geek.php");
        exit();
        // avec un header toujours mettre un exit() derrière
    }

    // Les supers globales
    // affiche le localhost
    echo $_SERVER['SERVER_NAME']."<br/>";
    // affiche le nom du fichier
    echo $_SERVER['PHP_SELF']."<br/>";
?>