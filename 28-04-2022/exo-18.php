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
            <input type="submite" name="envoyer" /><br/>
        </div>

        <?php
            // if(isset($_POST['envoyer'])){
            //     $nbr=$_POST["nombre"];}
        ?>

    </form>

    <form action="exo-18.php" method="post">
        <div>
            Indiquer vos cinq compétences principal : <br/>

            <?php
            if (isset($_POST['envoyer'])){
            $nbr=$_POST['nombre'];
            for($compteur=1;$compteur < $nbr; $compteur++): 
            }
            ?>
            <input type="text" /><br/>
            <?php endfor ?>
                <input type="submit" value="soumettre" /> 

        </div>
    </form>
    
</body>
</html>
