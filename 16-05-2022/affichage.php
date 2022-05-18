<?php
// démarage de la session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>traitement</title>
</head>
<body>
    <?php
    //  echo $prenom."<br/>";
    //  echo $nom."<br/>";
    $perfil = session_id();
    
    echo "<section>"."<a>"."<h1>".session_id()."</h1>"."</a>"."</section>";
    echo "<section>"."<h1>"."<a href='session.php'> Session </a>"."</h1>"."</section>";
    
    ?>

<footer>
    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</footer>

</body>
</html>