<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="/images/rouge-PTLEJ-bases.png" />
    <title>Envoyer un email</title>
</head>
<body>
    <section>
        <h1>Mail</h1>
        <?php
            $destinataire = "alphajorider@gmail.com";

            // objet du message

            $objet="Inscription au DWWM";

            // message

            $message="Bonjour les Geeks \n";

            // par défaut la fonction mail coupe le message si il dépasse 70 carractères
            // le wordwrap passe à la ligne automatiquement à partir de 70 caractères

            $message.="Prise en compte de votre inscription :\n";
            $message.="Nous vous informons que votre examen se déroule  :\n";
            $message.="le 30 Août prochaint dans notre centre de Valence :\n";
            $message.="les horaires sont de 9h à 12h 30 :\n";
            $message.="Votre conseillé en connerie. \n";

            $message2 =wordwrap("SaladinN 1 ou Ṣalāḥ ad-Dīn Yūsuf (en arabe: صلاح الدين يوسف) et Selahedînê Eyûbî (en kurde: سەلاحەدینی ئەییووبی), né à Tikrit en 1138 et mort à Damas le 4 mars 11931, est le premier dirigeant de la dynastie ayyoubide, dynastie qui tient son nom de son père Najm al-Dīn Ayyūb et qui a régné sur l'Égypte de 1169 à 1250 et sur la Syrie de 1174 à 1260. Saladin dirige l'Égypte de 1169 à 1193, Damas de 1174 à 1193 et Alep de 1183 à 1193.

            D'origine kurde, Saladin sert d'abord l'émir zengide de Syrie, Nur ad-Din. Envoyé en Égypte, où règne la dynastie fatimide déclinante, il y est nommé vizir en 1169 et abolit le califat fatimide en 1171. Il s'empare du pouvoir en Syrie après la mort de Nur ad-Din en 1174. Il concentre ensuite ses efforts contre les différents États latins d'Orient, dont il est le principal adversaire durant le dernier tiers du xiie siècle, et mène les musulmans à la reconquête de Jérusalem en 1187. Il affronte ensuite la troisième croisade, menée par les rois de France Philippe Auguste et d'Angleterre Richard Cœur de Lion, et conclut avec Richard une paix qui lui permet de conserver Jérusalem.
            
            Son nom entier durant son règne fut Al-Malik an-Nāsir Ṣalāḥ ad-Dīn Yūsuf. An-Nāsir signifie en arabe « celui qui reçoit la victoire de Dieu », et Saladin (Ṣalāḥ ad-Dīn) la « rectitude de la Foi ».",70);



            echo "<h2>".$message."</h2>";
        ?>
    </section>

    <section>
        <!-- envoie de message en text brute -->
         <?php
            $ok = mail($destinataire, $objet, $message);
            if($ok){
                echo "le messsage a été envoyé";
            }
            else{
                echo "échec mission";
            }
        ?>   
    </section>

    <section>
        <?php
            echo $message2;

        ?>
    </section>

    
</body>
</html>