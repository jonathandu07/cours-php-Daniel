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
    <form action="connection.php" method="POST">
        <input type="text" name="pseudo" placeholder="pseudo">
        <input type="password" name="password" placeholder="mot de passe" required>
        <input type="submit" name="valide" value="valider">
     </form>
    
     <?php
     $pseudo ="jojo";
     $password ="wesh";

     
        if(isset($_POST["valide"])){
            if($_POST['password'] == $password &&  $_POST['pseudo'] == $pseudo){
                header("Location: authentification.php");
            }
            else{
                $tentative =0;
                while(($_POST['password'] != $password &&  $_POST['pseudo'] != $pseudo)){
                $tentative ++;
                if($tentative >= 3){
                    header("Location: erreur.php");
                }
            }
            
        }
     }

     ?>
</body>
</html>