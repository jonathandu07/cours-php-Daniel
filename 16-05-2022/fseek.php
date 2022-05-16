<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fseek</title>
</head>
<body>
    <?php
        $fichier=fopen('./txt/password_list.txt','r');
        while (!feof($fichier)){
            echo fgets($fichier)."<br/>";
        }
        fclose($fichier);

        $fichier=fopen('./txt/password_list.txt','r');
        echo readFile($fichier)."<br/>";

        fclose($fichier);
    
        $fichier=fopen('./txt/password_list.txt','r');
        echo fread($fichier,100)."<br/>";

        $fichier=fopen('./txt/password_list.txt','r');
        echo fpassthru($fichier)."<br/>";

    fclose($fichier);

    fclose($fichier);

    ?>
</body>
</html>