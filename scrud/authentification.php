<?php
include("sql-param.inc.php");
include_once("sql-base.php");
$idcom=connexbase("magasin","sql-param");

if(isset($_POST['ajouter_article'])){
    header('location:ajout_article.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main-scrud.css">
    <link rel="shortcut icon" href="./images/rouge-PTLEJ-bases.png">
    <title>Mission réussite</title>
</head>
<body>
    <section class="section-css">
        <h1>Mission réussite</h1>
        <h3>Connextion réussite</h3>
        <button onclick="javascript:history.back()" class="boutton">Retour</button>
    </section>
    <?php
    echo "<section class='section-css'>"."<h3>"."Connexion à la base de donnée réussite"."</h3>"."</section>";
    ?>

    <section class="section-css">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" value="ARTICLE" name="env_article" class="boutton"/>
        &nbsp
        <input type="submit" value="AJOUTER" name="ajouter_article" class="boutton"/>
        &nbsp
        <input type="submit" value="CHERCHER" name="chercher_client" class="boutton" placeholder="chercher cliert"/>
    </form>
    </section>

    <section class="section-css">
        <?php
            if(isset($_POST['env_article'])){
                $rqt_article="SELECT * FROM article";
                $resultat=$idcom->query($rqt_article);

                if(!$resultat){
                    echo "<h3>"."Lecture impossible de la table Article"."</h3>";
                }
                while($ligne = $resultat->fetch_array(MYSQLI_NUM)){
                    foreach($ligne as $cle){
                        echo "<h3>".$cle,"&nbsp"."</h3>";
                    }
                    echo "<hr/>";
                }
                // détruit (l'objet résultat) le résultat et libère de la mémoire
                $resultat->free();
            }
            // récupére id de connection
            $idcom->close();

            if(isset($_POST['chercher_client'])){
                header('location:chercher-client.php');
                exit();
            }
        ?>
    </section>
</body>
</html>