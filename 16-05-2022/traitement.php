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
    // htmlspecialchars empèche les injinction de script
    // htmlentities  empèche les injinction de script
    // traiter l'information et ensuite retirer les espace
    //  htmlspecialchars($_POST['prenom'])."<br/>";
    //  htmlspecialchars($_POST['nom'])."<br/>";
     $prenom=htmlentities(trim($_POST['prenom']));
     $nom=htmlentities(trim($_POST['nom']));
    //  echo $prenom."<br/>";
    //  echo $nom."<br/>";
    $perfil = session_id();

    // $_SESSION['nom']=$_POST['nom']; ratache le nom à la session donc si je change de nom je change de session d'office
    $_SESSION['nom']=$_POST['nom'];
    $_SESSION['prenom']=$_POST['prenom'];
    
    echo "<section>"."<a>"."<h1>".session_id()."</h1>"."</a>"."</section>";
    echo "<section>"."<a>"."<h1>"."<a href='affichage.php'> Affichage </a>"."</a>"."</h1>"."</section>";
    ?>

<footer>
    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</footer>

</body>
</html>