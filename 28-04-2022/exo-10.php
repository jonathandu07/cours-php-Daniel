
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
        <form action="exo-10.php" method="POST" enctype="multipart/from-data">
            <label>Chaine de caractères</label>
            <input type="text" name="chaine" placeholder="saisie votre text" maxlength="25" required/>
            <input type="reset" value="effacer" name="annuler">
            <input type="submit" value="envoyer" name="envoyer">


        </form>
    </section>


    <?php
        if (isset($_POST['envoyer'])){
         $text=$_POST['chaine'];
        // $texte="        toto             ";
        // compter le nombre de carractère.

        $nb_avant_traitement=strlen($texte);
        echo "vous avez saisie:".$nb_avant_traitement."caractères <br/>";

        // supprimme les espace en début et en fin de chaine

        $texte=trim($texte);

        // compter le nombre de carractère.

        $nb_avant_traitement = strlen($texte);
        echo "vous avez saisie:" . $nb_avant_traitement . "caractères <br/>";

        $compteur = 0;

        echo("<table>");
            while($compteur <$nb_avant_traitement){
                echo("<tr><td>");
                echo ($texte[$compteur]);
                echo("</td></tr>");
                $compteur++;
            }

        echo("</table>");
    }
    ?>
</body>

</html>