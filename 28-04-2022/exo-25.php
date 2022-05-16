<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Deo Grattia</title>
</head>
<body>
    <form method="post" action="exo-25.php">
        <input type="text" name="lettre" />
        <input type="submit" name="envoyer"/>


    <?php
    if(isset($_POST['envoyer'])){
        
        $lettre=array('A','E','I','O','U','Y');
        $caractere=strtoupper($_POST['lettre']);
            $indice=0;
            while($indice<count($lettre)){
                if($lettre[$indice]==$caractere){
                    echo("Vous avez saisi le caractère $caractere. C'est une voyelle !");
                    break;
                }
                else{
                    echo("Vous avez saisi le caractère $caractere. C'est une consonne !");
                    break;
                }
            $indice++;
            }
    }

    ?>
    </form>
</body>
</html>