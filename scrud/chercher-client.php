<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main-scrud.css">
    <link rel="shortcut icon" href="./images/rouge-PTLEJ-bases.png">
    <title>Chercher client</title>
</head>
<body>
    <?php
    echo "<section class='section-css'>"."<h3>"."Chercher client"."</h3>"."</section>";
    ?>

    <section class="section-css">
        <form action="traitement.php" method="POST">
        <input type="text" name="Id_Client" placeholder="Id_Client" required class="input-css" maxlength="11"/><br/>
        <!-- <input type="text" name="Nom" placeholder="Nom" required  class="input-css" maxlength="20"/><br/>
        <input type="text" name="Prenom" placeholder="Prenom" required  class="input-css" maxlength="20"/><br/>
        <input type="text" name="Adresse" placeholder="Adresse" required  class="input-css" maxlength="100"/><br/>
        <input type="text" name="Ville" placeholder="Ville" required  class="input-css" maxlength="100"/><br/>
        <input type="text" name="Age" placeholder="Age" required  class="input-css" maxlength="2"/><br/>
        <input type="text" name="Mail" placeholder="Mail" required  class="input-css" maxlength="100"/><br/> -->

        <input type="reset" value="ANNULER" name="annuler" class="boutton"/>
        <button onclick="javascript:history.back()" class="boutton">Retour</button>
        &nbsp
        <input type="submit" value="AJOUTER" name="ajouter_article" class="boutton"/>
    </form>
    </section>

    <section class="section-css">
        <?php

        ?>
    </section>
</body>
</html>