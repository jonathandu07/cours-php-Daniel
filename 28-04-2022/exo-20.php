<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Do While</title>
</head>
<body>
    <form action="exo-20.php" method="post">
        <div>Indiquer vos le nombre de compétences que vous voulez : <br/>
                <input type="text" name="nombres" />
                <input type="submit" name="envoyer"/>


            <?php
                if(isset($_POST['envoyer'])){
                    $nombres=$_POST['nombres']+1;
                    // $competence=$competence+$compteur;
                    for($compteur=1;$compteur<$nombres;$compteur++){
                        echo("<p> Compétence $compteur :  </p>"."<input type='text' name='competence $compteur'><br/>");
                    }
                }
            ?>
            <input type="submit" name="afficher"/>

            <?php
                if(isset($_POST['afficher'])){
                    $nombres=$_POST['nombres']+1;
                    $affiche=$_POST['competence'];
                    for($nb=1;$cpt<$nombres)
                    }
                    echo($sortie[1]);
            
            ?>


        </div>
   </form>
</body>
</html>