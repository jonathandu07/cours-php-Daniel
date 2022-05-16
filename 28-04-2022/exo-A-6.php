
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
    <form action="exo_13" method="post">
        <div>Indiquer vos le nombre de compétences que vous voulez : <br/>
                <input type="text" name="nombres" />
                <input type="submit" name="envoyer"/>
                
            
            <?php
                if(isset($_POST['envoyer'])){
                    $nombres=$_POST['nombres']+1;
                    $competence=1;
                    for($compteur=1;$compteur<$nombres;$compteur++){
                        echo("<p> Compétence $competence :  </p>"."<input type='text' name='competence'><br/>");

                    }
                }
            ?>
            <input type="submit" name="afficher"/>

            <?php
                if(isset($_POST['afficher'])){
                    $affiche=$_POST['competence'];
                    echo("<br>affichage texte : $affiche");

                }
            ?>


        </div>
   </form>
</body>
</html>