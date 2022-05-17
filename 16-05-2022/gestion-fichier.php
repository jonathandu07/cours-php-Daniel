<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>fichier</title>
</head>
<body>
    <h1>Quelques opérations de base sur les fichoers</h1>
    <!-- si le fichier n'exister pas alors il doit être crée -->
    <?php
        // $fichier=(file_exists('./txt/geek.txt'));
        // if($fichier){
        //     echo 'il existe';
        // }
        // else{
        //     $fichier = fopen("./txt/geek.txt", "a+");
        //     echo 'fichier créé';
        // }

        // // écire dans un ficher
        // fwrite($fichier,"cador ici 2 pour test radio parlez");
        // // fermer l'instace du fichier

        // fclose($fichier);
        // echo str_repeat("_",150).'<br/>';
        
        // // exemple 1 affichier le fichier texte
        // $fichier = fopen("./txt/geek.txt","r");
        // $texte=fread($fichier,filesize('./txt/geek.txt'));
        // fclose($fichier);
        // echo $texte;

        // echo str_repeat("_",150).'<br/>';
        // // montrer ce qui dans le fichier txt

        // $file=file_get_contents("\n"."<br/>"."./txt/geek.txt"."<br/>");
        // echo $file;

        // fpassthru($fichier);
        // exit;

        // echo "<h2> affichage des répertoires</h2>";
        //     // Ouvrir le répertoire

        // $dir= opendir('./txt');
        // echo $dir;
        // while($txt=readdir($dir)){
        //     echo $txt,'<br/>';
            
        // }
        // closedir($dir);

        $fichier =scandir('./txt');
        // Parcourir le résultat
        foreach($fichier as $fichier){
            echo $fichier.'<br/>';
        }

        closedir($dir);

    ?>
</body>
</html>