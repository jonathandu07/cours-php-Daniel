<?php
    error_reporting(0);
     session_start();
     $perfil = session_id();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>connextion</title>
</head>
<body>
    <section>
        <form action="connection.php" method="POST">
            <input type="text" name="pseudo" placeholder="pseudo">
            <input type="password" name="password" placeholder="mot de passe" required>
            <input type="submit" name="valide" value="valider">
            <input type="submit" name="logout" value="logout">
        </form>
    </section>

    
     <?php
     $pseudo ="jojo";
     $password ="wesh";

     
        if(isset($_POST["valide"])){
            if($_POST['password'] == $password &&  $_POST['pseudo'] == $pseudo){
                header("Location: authentification.php");
            }
            else{
                $_SESSION['echec']++;
                if($_SESSION['echec']<=3){
                    echo "<section>"."<h1>"."vous avez vu : ".$_SESSION['echec']." fois cette page"."<br/>"."</h1>"."</section>";
                }
                else{
                    if(isset($_SESSION['echec'])>=3){
                        header('location:erreur.php');
                        exit;
                     }
                     else{
                         $_SESSION['echec']=0;
                     }
        }}
     }

     ?>
</body>
</html>