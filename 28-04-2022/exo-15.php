<?php
    

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma première page en php</title>
</head>
<body>
   

    <section>
        <form action="exo-15.php" method="POST" enctype="multipart/form-data">

            <label>Chaine de caractères</label>
            <input type="text" name="chaine" placeholder="Saisissez votre texte" maxlength="25" required >
            <br>
            <label>Caractères à comptabiliser</label>
            <input type="text" name="trouver" maxlength="1" required><br>
            <label>Caractères à remplacer</label>
            <input type="text" name="remplacer" maxlengt="1" required>
            <br>
            <input type="submit" value="Soumettre" name="envoyer">
            <input type="reset" value="Effacer" name="annuler">


        </form>
    </section>

   <?php
    
    


    if (isset($_POST['envoyer'])){
    $texte=$_POST['chaine'];

    

    $compteur = 0;
    
    $nb_avant_traitement=strlen($texte);
    echo "Vous avez saisie $nb_avant_traitement charactères<br>";

    $texte=trim($texte);

    $nb_apres_traitement=strlen($texte);
    echo "Vous avez saisie $nb_apres_traitement charactères<br>";

    echo "<table>";

        while($compteur < $nb_apres_traitement){
            echo("<tr><td>");
                echo ($texte [$compteur]);
            echo("</td></tr>");
            $compteur++;
        }

    echo "</table>";

    $caractere = $_POST['trouver'];

    $nbcar = 0;
    $compteur = 0;
    while($compteur < $nb_apres_traitement){
        
        if ($caractere == $texte[$compteur]){
            $nbcar++;
        }

        $compteur++;
    }
    if($nbcar != 0){

            echo"Vous avez dans votre chaine de caractère : $nbcar caractères trouvés<br>";
    }
    else{

        echo"Vous n'avez aucun caractère trouvé<br>";

    }

    $caractere_remplacer = $_POST['remplacer'];
    echo "<section>";
        $compteur = 0;
        echo "<table>";
        while($compteur < $nb_apres_traitement){
                echo("<tr><td>");
                    
            
            if ($caractere == $texte[$compteur]){
                $texte [$compteur] = $caractere_remplacer;
                echo($texte[$compteur]);
                $nbcar++;
            }
            else{

                echo($texte[$compteur]);
    
            }
         
            echo("</td></tr>");
            $compteur++;
        }
        
        
        echo "</table>";
        echo"</section>";


    }


    ?>
        
    
</body>
</html>
