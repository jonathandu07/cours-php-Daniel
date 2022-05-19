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
    <title>panier</title>
</head>
<body>
    
    <section>
        <h3>Saisie d'articles</h3>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="text" name="nom" placeholder="nom article" required>
            <input type="text" name="code" placeholder="code article" required>
            <input type="text" name="prix" placeholder="prix required">
            <input type="submit" name="valide" value="valider">
            <input type="submit" name="afficher" value="afficher">
            <input type="reset" value="annuler" class="annuler">
            <input type="submit" value="logout" class="logout" name="logout">
        </form>
    </section>
    <?php
        if(isset($_POST["valide"])){
            $nom=htmlentities(trim($_POST['nom']));
            $code=htmlentities(trim($_POST['code']));
            $prix=htmlentities(trim($_POST['prix']));
            $_SESSION['nom']=$_POST['nom']."/".$nom; 
            $_SESSION['code']=$_POST['code']."/".$code;
            $_SESSION['prix']=$_POST['prix']."/".$prix;

            // $nom=$_SESSION['nom']=$_POST['nom'];
            // $code=$_SESSION['code']=$_POST['code'];
            // $prix=$_SESSION['prix']=$_POST['prix'];
            // explode('/', $_SESSION['nom']);
        }
        print_r($_SESSION['code']);
        print_r($_SESSION['nom']);
        print_r($_SESSION['prix']);
    ?>


    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</body>
</html>