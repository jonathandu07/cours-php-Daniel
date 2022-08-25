<?php
    use Cci\User;
    use utilisateur\Mail;
    
    use function Cci\tester;
    use const Cci\Prenom;
    use const utilisateur\Nom;
    use function Cci\calculer;
    use function test;
    
    require_once __DIR__."/lib/user.class.php";
    require_once __DIR__."/lib/mail.class.php";
    require_once __DIR__."/index-exception.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>PDO</title>
</head>
<body>
    <section>
        <?php
$user=new User();
        ?>
    </section>

    <section>
        <?php
$mail = new Mail();
        ?>
    </section>


    <section>
        <?php
        echo Prenom;
        echo "&nbsp;";
        echo Nom;
        ?>
    </section>

    <section>
        <?php
            calculer();
        ?>
    </section>

    <section>
        <?php
tester();
        ?>
    </section>

        <?php
            test();
        ?>

        <?php
            phpinfo();
        ?>
</body>
</html>