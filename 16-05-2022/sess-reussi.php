<?php
// démarage de la session
session_start();
if($_SESSION['acces']!='oui'){
    header('location:session-connexion.php');
}
else{
    echo "<section>"."<a>"."<h1>"."bonjour cher client :".$_SESSION['pseudo']."<br/>"."</h1>"."</a>"."</section>";
    if(isset($_SESSION['reussi'])){
        echo "<section>"."<h1>"."vous avez vu : ".$_SESSION['reussi']++." fois cette page"."<br/>"."</h1>"."</section>";
     }
     else{
         $_SESSION['reussi']=0;
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
    <title>réussi</title>
</head>
<body>
    <?php
    // htmlspecialchars empèche les injinction de script
    // htmlentities  empèche les injinction de script
    // traiter l'information et ensuite retirer les espace
    //  htmlspecialchars($_POST['prenom'])."<br/>";
    //  htmlspecialchars($_POST['nom'])."<br/>";
    // $_SESSION['nom']=$_POST['nom']; ratache le nom à la session donc si je change de nom je change de session d'office
    
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