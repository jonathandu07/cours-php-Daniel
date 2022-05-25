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
    <title>Ajout client</title>
</head>
<body>
    <section class="section-css">
        <h1>Ajout client</h1>
        <h3>ajouter des clients</h3>
    </section>
    <?php
    echo "<section class='section-css'>"."<h3>"."traitement php"."</h3>"."</section>";
    echo "<button onclick='javascript:history.back()' class='boutton'>Retour</button>";
    ?>
    <section class="section-css">
        <?php
        // On récuprére la variable id du client
        $id= htmlspecialchars($_POST['Id_Client']);
        // création de la requête pour récupérer les donnés du client
        $rqt_search = "SELECT * FROM client WHERE Id_Client=$id";
        // $rqt_search.="WHERE Id_Client=$id";
        $resultat=$idcom->query($rqt_search);
        $data = $resultat->fetch_row();

        // print_r($resultat);

        // création du formulaire

        if(!isset($_POST['Id_Client'])){
            header('location: chercher-client.php');
            exit();
        }

        ?>
    </section>

    <section class="section-css">
        <h1>Ajout client</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="Id_Client" placeholder="Id_Client" required class="input-css" maxlength="11" value="<?php echo $data[0] ?>"/><br/>
        <input type="text" name="Nom" placeholder="Nom" required  class="input-css" maxlength="20"  value="<?php echo $data[1] ?>"/><br/>
        <input type="text" name="Prenom" placeholder="Prenom" required  class="input-css" maxlength="20"  value="<?php echo $data[2] ?>"/><br/>
        <input type="text" name="Adresse" placeholder="Adresse" required  class="input-css" maxlength="100"  value="<?php echo $data[3] ?>"/><br/>
        <input type="text" name="Ville" placeholder="Ville" required  class="input-css" maxlength="100"  value="<?php echo $data[4] ?>"/><br/>
        <input type="text" name="Age" placeholder="Age" required  class="input-css" maxlength="2"  value="<?php echo $data[5] ?>"/><br/>
        <input type="text" name="Mail" placeholder="Mail" required  class="input-css" maxlength="100"  value="<?php echo $data[6] ?>"/><br/>
        <input type="hidden" name="code" placeholder="code" class="input-css" maxlength="100"  value="<?php echo $data[0] ?>"/><br/>

        <input type="submit" value="UPDATE" name="UPDATE" class="boutton"/>
        <input type="reset" value="ANNULER" name="annuler" class="boutton"/>
        <button onclick="javascript:history.back()" class="boutton">Retour</button>
        &nbsp
        <input type="submit" value="AJOUTER" name="ajouter_article" class="boutton"/>
        
    </form>
    </section>

    <?php

    if(isset($_POST['UPDATE'])){

        $id= htmlspecialchars($_POST['Id_Client']);
        $Nom= htmlspecialchars($_POST['Nom']);
        $Prenom= htmlspecialchars($_POST['Prenom']);
        $Adresse= htmlspecialchars($_POST['Adresse']);
        $Ville= htmlspecialchars($_POST['Ville']);
        $Age= htmlspecialchars($_POST['Age']);
        $Mail= htmlspecialchars($_POST['Mail']);
        $code= htmlspecialchars($_POST['code']);

        $rqt_update="UPDATE client SET Id_Client='$id',Nom='$Nom' ,Prenom='$Prenom',Adresse='$Adresse',Ville='$Ville', Age='$Age' ,Mail='$Mail' WHERE Id_Client='$code'";
        $resultat=$idcom->query($rqt_update);

        header('location: traitement.php');
        exit();
    }


    $resultat->free();
    $idcom->close();
    ?>
</body>
</html>