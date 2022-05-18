<?php
// démarage de la session
session_start();
if($_SESSION['acces']!='oui'){
    header('location:session-connexion.php');
}
else{
    echo "<section>"."<a>"."<h1>"."connexion échouée cher client".$_SESSION['pseudo']."<br/>"."</h1>"."</a>"."</section>";
    if(isset($_SESSION['erreur'])){
        echo "<section>"."<h1>"."vous avez vu :".$_SESSION['erreur']++." fois cette page"."<br/>"."</h1>"."</section>"; 
     }
     else{
         $_SESSION['erreur']=0;
     }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Erreur</title>
</head>
<body>
    <?php
    echo "<section>"."<a>"."<h1>".session_id()."</h1>"."</a>"."</section>";
    echo "<section>"."<a>"."<h1>"."<a href='session-connexion.php'> session-connexion </a>"."</a>"."</h1>"."</section>";
    ?>

<footer>
    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</footer>

</body>
</html>