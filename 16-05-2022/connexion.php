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
    <title>connexion</title>
</head>
<body>
    <section>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="identifiant" placeholder="identifiant">
            <input type="password" name="password" placeholder="mot de passe" required>
            <input type="submit" name="valide" value="valider">
            <input type="submit" name="logout" value="logout">
        </form>
    </section>
    
    <section>
        <?php
            if (isset($_POST['valide'])){
                $password="ccidsi2001";
                $identifiant="administrateur";

                if($_POST['password'] == $password &&  $_POST['identifiant'] == $identifiant){
                    header("Location:succes.php");
                    exit();
                    $_SESSION['tentative']=0;
                }
                else{
                    $_SESSION['tentative']++;
                    if($_SESSION['tentative']<3){
                        echo "<section>"."<h1>"."vous avez fait : ".$_SESSION['tentative']." tentatives"."<br/>"."</h1>"."</section>";
                    }
                    else{
                        header('location:echec.php');
                        exit();
                    }
                }
            }
        ?>
    </section>

    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</body>
</html>