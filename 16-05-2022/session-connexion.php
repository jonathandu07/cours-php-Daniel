<?php
// démarage de la session
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
    <title>Session-connexion</title>
</head>
<body>
    
    <section>
        <h3>Veuillez vous connecter</h3>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="pseudo" placeholder="pseudo">
            <input type="password" name="password" placeholder="mot de passe">
            <input type="submit" name="valide" value="valider">
            <input type="reset" value="annuler" class="annuler">
            <input type="submit" value="logout" class="logout" name="logout">
        </form>
    </section>

    
     <?php
     $pseudo ="jojo";
     $password ="wesh";
        if(isset($_POST["valide"])){
            if($_POST['password'] == $password &&  $_POST['pseudo'] == $pseudo){
                $pseudo=htmlentities(trim($_POST['pseudo']));
                $password=htmlentities(trim($_POST['password']));
                $_SESSION['pseudo']=$_POST['pseudo'];
                $_SESSION['password']=$_POST['password'];
                $_SESSION['acces']="oui";
                header("Location: sess-reussi.php");
            }
            else{
                header("Location: sess-erreur.php");
            
            }
            
        }

     ?>

     <section>
         <a href="./sess-erreur.php"><h1>Erreur</h1></a>
         <?php
         if(isset($_SESSION['erreur'])) echo "vous avez vu : ".$_SESSION['erreur']." fois cette page";
         ?>
         <a href="./sess-reussi.php"><h1>réussi</h1></a>
         <?php
         if(isset($_SESSION['reussi'])) echo "vous avez vu : ".$_SESSION['reussi']." fois cette page";
         ?>
     </section>


    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</body>
</html>