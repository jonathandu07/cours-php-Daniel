
  <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Mi primera pagina en PHP</title>
</head>

<body>
    <section>
        <form action="exo-11.php" method="POST" enctype="multipart/from-data">
            <label>Chaine de caractères</label>
            <input type="text" name="chaine" placeholder="saisie votre text" maxlength="25" required/>
            <input type="reset" value="effacer" name="annuler">
            <input type="submit" value="envoyer" name="envoyer">
            <label>caractère à comptabiliser</label>
            <input type="text" name="trouver"  maxlength="1"/>

            <label>caractère à remplacer</label>
            <input type="text" name="remplacer" placeholder="caractère à remplacer" maxlength="1"/>


        </form>
    </section>


    <?php
        if (isset($_POST['envoyer'])){
         $texte=$_POST['chaine'];
        // $texte="        toto             ";
        // compter le nombre de carractère.

        $nb_apres_traitement=strlen($texte);
        echo "vous avez saisie:".$nb_apres_traitement."caractères <br/>";

        // supprimme les espace en début et en fin de chaine

        $texte=trim($texte);

        // compter le nombre de carractère.

        $nb_avant_traitement = strlen($texte);
        echo "vous avez saisie:" . $nb_apres_traitement . "caractères <br/>";

        $compteur = 0;

        echo("<table>");
            while($compteur <$nb_apres_traitement){
                echo("<tr><td>");
                echo ($texte[$compteur]);
                echo("</td></tr>");
                $compteur++;
            }

        echo("</table>");
            // compter le nombre de caractère à remplacer suivant son choix
            $caractere=$_POST['trouver'];

        // parcourir la chaine de caractère
            $compteur = 0;

            $nbcar=0;

        while($compteur < $nb_apres_traitement){
            if($caractere == $texte[$compteur]){
                $nbcar++;

            }


            $compteur++;

        }
        if($nbcar !=0){
            echo("vous avez dans votre chaine de caractères : $nbcar caractères trouvés");

        }
        else{ 
            echo("vous n'avez aucun caractère trouvé");

        }
    }

    // remplacer un caractère par un autre

    $caractere=$_POST['trouver'];
    $remplaceur = $_POST['remplacer'];
    $compteur = 0;

        while($compteur < $nb_apres_traitement){
            if($caractere == $texte[$compteur]){
                $remplaceur =&$caractere;

            }


            $compteur++;

        }
        if($nbcar !=0){
            echo("vous avez remplacer : $caractere");

        }
        else{ 
            echo("vous n'avez aucun caractère trouvé");

        }


    ?>
</body>

</html>