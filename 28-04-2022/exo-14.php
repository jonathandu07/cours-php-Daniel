
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
        <form action="exo-14.php" method="POST" enctype="multipart/from-data">
            <label>Chaine de caractères</label>
            <input type="text" name="chaine" placeholder="saisie votre text" maxlength="25" required/>
            <input type="reset" value="effacer" name="annuler">
            <input type="submit" value="envoyer" name="envoyer">
            <label>caractère à remplacer</label>
            <input type="text" name="trouver"  maxlength="1"/>

            <label>caractère remplaçant</label>
            <input type="text" name="remplacer" placeholder="remplaçant" maxlength="1"/>


        </form>
    </section>


    <?php
        if (isset($_POST['envoyer'])){
         $texte=$_POST['chaine'];
        // $texte="        toto             ";
        // compter le nombre de carractère.

        $nb_apres_traitement=strlen($texte);
        echo "vous avez saisie:".$nb_apres_traitement."caractères <br/>";

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

        // supprimme les espace en début et en fin de chaine

        $texte=trim($texte);

        }
        // remplacer des caractères
        $remplaceur =$_POST[$remplacer];

        echo("<section>");
            $compteur=0;
            echo("<table>");
            while($compteur <$nb_apres_traitement){
                echo "<tr><td>";
                if($caractere == $texte[$compteur]){
                    $texte[$compteur]=$remplaceur;
                    echo($texte[$compteur]);
                }

                else{
                    echo($texte[$compteur]);
                }
                echo("</td></tr>");
            }
    ?>
</body>

</html>