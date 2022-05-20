<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="/images/rouge-PTLEJ-bases.png" />
    <title>envoi mail</title>
</head>
<body>
    <section>
        <?php
        // destinataire
        $destinataire="alphajorider@gmail.com";
        // obejet
        $objet ="Demande d'inscription";
        // en-tête supplémentaires

        $entetes="From: \'Jonathan\'<jonathan@gmail.com\r\n";
        $entetes.="MIME-Version: 1.0\r\n";
        $entetes.="Content-Type: text/html; charset=utf-8\r\n";
        $entetes.="Content-Transfer-Encoding:8bit\r\n;";

        // Message HTML
        $message="<html>\n";
        $message="<hed><title>envoi mail</title></head>\n";
        $message="<body>\n";
        $message="<font color=\"#f9ba05\">Bonjour ! </font>\n";
        $message="</body>\n";
        $message="</html>\n";

        $email=mail($destinataire,$objet,$message,$entetes);
        echo $entetes;

        if($email){
            echo "message envoyé";
        }
        else{
            echo "message non envoyé";
        }
        ?>
        
    </section>
    
</body>
</html>