<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Form</title>
</head>
<body>
    <section>
        <h1>Formulaire de connexion</h1>
        <form action="form-cookie.php" method="POST" class="formulaire">
        <input type="text" name="pseudo" placeholder="pseudo" class="psuedo input">
        <input type="password" name="password" placeholder="mot de passe" required  class="password input">
        <input type="submit" name="valide" value="valider"  class="valider">
     </form>
    </section>

    
     <?php
     $login=array('pseudo'=>'jojo','password'=>'wesh');
    //  $pseudo ="jojo";
    //  $password ="wesh";
    // foreach($login as $cle => $valeur){
    //     $pseudo = $valeur;
    //     echo $pseudo;
    //     $password = $valeur;
    //     echo $password;
    // }

     
        if(isset($_POST["valide"])){
            if($_POST['password'] == $login['password'] &&  $_POST['pseudo'] == $login['pseudo']){
                $pseudo =$_POST['pseudo'];
                $password =$_POST['password'];
                header("Location: form-valide.php");
                // cookies valable 24h
                setcookie('Pseudo',$pseudo,time()+86400);
                setcookie('Password',$password,time()+86400);
            }
            else{
                // setcookie('Faux-Pseudo',$pseudo,time()+86400);
                // setcookie('Faux-Password',$password,time()+86400);
                header("Location: form-invalide.php");
                setcookie('Pseudo',$pseudo,time()-86400);
                setcookie('Password',$password,time()-86400);
        }
     }

     ?>
</html>