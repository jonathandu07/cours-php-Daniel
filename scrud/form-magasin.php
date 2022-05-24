<?php
    session_start();
    
    // suppression de l'initialisation de l'ID session
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
    }
    // $_SESSION['compteur']=0;
    if(isset($_POST['Valider'])){
        if((htmlspecialchars($_POST['login']=='wesh'))&&(htmlspecialchars($_POST['password']=='jojo'))){
            header("location:authentification.php");
            // $_SESSION['compteur']=0;
            echo 'ok';
            exit(); 
        }
        else{
            $_SESSION['compteur']++;
            if($_SESSION['compteur'] <4){
                header("location:form-magasin.php");
                }
                else{
                    header("location:noauthentification.php");
                    $_SESSION['compteur']=0;
                    exit();
                }
        }
    }
    

    if (isset($_SESSION['compteur'])){
        echo $_SESSION['compteur'];
    }
    else{
        $_SESSION['compteur']=0;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main-scrud.css">
    <link rel="shortcut icon" href="./images/rouge-PTLEJ-bases.png">
    <title>Formulaire magasin</title>
</head>
<body>
    <section class="section-css">
        <h1>Formulaire</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="formulaire">
            <table>
                <tr>
                    <td>
                        <input type="text" name="login" required class="entree" placeholder="login" class="taille1"/>
                        <input type="password" name="password" required class="entree" placeholder="password" class="taille1"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="Valider"  placeholder="Valider" value="valider" required class="boutton"/>
                    <input type="reset" name="annuler"  placeholder="annuler" value="annuler" required class="boutton"/>
                    <input type="submit" name="logout"  placeholder="logout" value="logout" required class="boutton"/>
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <?php
        echo "<section class='section-css'>"."<p>"."Votre numéro de session est : "."<br/>"."<h1>".session_id()."</h1>"."</section>"
    ?>
</body>
</html>