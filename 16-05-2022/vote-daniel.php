<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>vote</title>
</head>
<body>
<section class="main">
        <h1>Vote</h1>
        <form action="vote.php" method="POST">
        <h3>Votant</h3>
        <input type="text" name="nom" placeholder="nom" required maxlength="25" class="nom" required>
        <input type="text" name="prenom" placeholder="prenom" required maxlength="25" class="objet" required>
        <input type="submit" value="valider" name="valider" class="valider bas">
        <input type="reset" value="annuler" class="annuler bas">
    </form>
    </section>

    <!-- vote -->

    <section>
    <form action="vote.php" method="POST">
        <label for="" name="candidat" value="Macron">Napoléon</label>
        <input type="radio" name="vote" value="Napoleon">

        <label for="" name="candidat" value="Macron">Charles De Gaule</label>
        <input type="radio" name="vote" value="DeGaule">

        <label for="" name="candidat" value="Macron">Alexandre Le Grand</label>
        <input type="radio" name="vote" value="Alexandre">

        <label for="" name="candidat" value="Macron">Pape François</label>
        <input type="radio" name="vote" value="Pape">

        <label for="" name="candidat" value="Macron">Poutine</label>
        <input type="radio" name="vote" value="Poutine">

        <label for="" name="candidat" value="Macron">Jonathan</label>
        <input type="radio" name="vote" value="Jonathan">
    </form>
    </section>
    

    <?php
       if ((isset($_POST['choix']))&&(isset($_POST['envoyer']))){
        // Je vais vérifier les cookies
        // Je signale que j'ai déja voté
        if(isset($_COOKIE['votant'])&&(isset($_COOKIE['vote']))){
            $vote=$_COOKIE['vote'];
        }else{
            // Sinon je vais générer les cookies et la saisie dans le fichier sondage
            if(file_exists('vote.txt')){
                $fichier=fopen("vote.txt","a");
                fwrite($fichier,$_POST['choix']."\n");
                echo 'le fichier existe';
                fclose($fichier);
            }else{
                $fichier=fopen("vote.txt","w");
                fwrite($fichier,$_POST['choix']."\n");
                echo "fichier créez";
                fclose($fichier);
            }
        }
    }
    ?>
    <script language="javascript" type="text/javascript">
        alert("vous avez déjà voté pour <?php echo $vote ?>");
    </script>
    <?php
    else{
        setcookie("votant", "true",time()+60);
    }

    ?>
</body>
</html>