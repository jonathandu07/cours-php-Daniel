<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma première page en php</title>
</head>
<body>
    <form action="" enctype='multipart/form-data'>
        <div>
            <input type="text" name="nombre" placeholder="nombre de compétence"/>
            <input type="submit" name="envoyer" /><br/>
        </div>

        <?php
            // if(isset($_POST['envoyer'])){
            //     $nbr=$_POST["nombre"];}
        ?>

    </form>

    <form action="exo-19.php" method="post">
        <div>
            Indiquer vos cinq compétences principal : <br/>

            <?php
            if (isset($_POST['envoyer'])){
            $nbr=$_POST['nombre'] +1;
            $comptetence = 1;
            for($compteur = 1; $compteur < $nbr; $compteur++){
                echo("<p> comptence $comptence : </p>"."<input typte='text' name='comptence'><br/>");
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
