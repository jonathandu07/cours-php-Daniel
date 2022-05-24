<?php
include("sql-param.inc.php");
include_once("sql-base.php");
$idcom=connexbase("magasin","sql-param");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main-scrud.css">
    <link rel="shortcut icon" href="./images/rouge-PTLEJ-bases.png">
    <title>Ajout article</title>
</head>
<body>
    <section class="section-css">
        <h1>Ajout article</h1>
        <h3>ajoueter des articles</h3>
    </section>
    <?php
    echo "<section class='section-css'>"."<h3>"."Connexion à la base de donnée réussite"."</h3>"."</section>";
    ?>

    <section class="section-css">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="Id_Article" placeholder="N°Article" required class="input-css" maxlength="11"/><br/>
        <input type="text" name="Designation" placeholder="Désignation" required  class="input-css" maxlength="20"/><br/>
        <input type="text" name="Prix_Unitaire" placeholder="Prix" required  class="input-css" maxlength="10"/><br/>
        <input type="text" name="Categorie" placeholder="Catégorie" required  class="input-css" maxlength="100"/><br/>

        <input type="reset" value="ANNULER" name="annuler" class="boutton"/>
        <button onclick="javascript:history.back()" class="boutton">Retour</button>
        &nbsp
        <input type="submit" value="AJOUTER" name="ajouter_article" class="boutton"/>
    </form>
    </section>

    <section class="section-css">
        <?php
            if(isset($_POST['ajouter_article'])){
                $id=htmlspecialchars($_POST['Id_Article']);
                $designation=htmlspecialchars($_POST['Designation']);
                $prix=htmlspecialchars($_POST['Prix_Unitaire']);
                $categorie=htmlspecialchars($_POST['Categorie']);

                $rqt_ajout_article="INSERT INTO article VALUES('$id','$designation','$prix','$categorie')";
                $resultat=$idcom->query($rqt_ajout_article);
            // récupére id de connection
                
            }
            $idcom->close();

        ?>
    </section>
</body>
</html>