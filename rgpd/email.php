<?php
    function proteger($email){
        $adresse_mail="";
        for($i=0;$i<strlen($email);$i++){
            $adresse_mail ="#&".ord(substr($email,$i,1)).";";
            return $adresse_mail;
        }
    }

    echo "<section><h1><a href='".proteger("mailto:jonathan.despeyroux@gmail.com")."'>Nous contacter</a></h1></section>";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Mail</title>
</head>
<body>
    <section>
        <?php
            echo("<h1>"."adresse mail entrée"."<br/>"."wallah@gmail.com"."</h1>");
        ?>
    </section>

    <section>
        <?php
            echo("<h1>"."Après chiffrement"."<br/>".proteger("wallah@gmail.com")."</h1>");
        ?>
    </section>
    
</body>
</html>