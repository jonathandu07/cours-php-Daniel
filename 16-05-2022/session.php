<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Session</title>
</head>
<body>
    <section class="main">
        <h1>Connexion</h1>
        <form action="traitement.php" method="POST">
        <input type="text" name="nom" placeholder="nom" required maxlength="25" class="nom">
        <input type="text" name="prenom" placeholder="prenom" required maxlength="25" class="prenom">
        <!-- <input type="password" name="passe" placeholder="mot de passe" maxlength="250" required> -->
        <input type="submit" value="valider" name="valider" class="valider bas">
        <input type="reset" value="annuler" class="annuler bas">
    </form>
    </section>

<footer>
    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</footer>
</body>
</html>