<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>invalide</title>
</head>
<body>
    <section>
        <?php
        echo "<h2>Vous avez rentré les choses suivante</h2>";
        echo "<h3>".$_COOKIE['Faux-Pseudo'].' '.$_COOKIE['Faux-Password']."</h3>";
         ?>

    <a href="./form-cookie.php">
        <button class="bouton">Retour</button>
    </a>
    </section>

    
</body>
</html>