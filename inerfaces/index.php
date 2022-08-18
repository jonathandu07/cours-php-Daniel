<?php
    include_once( "./interface.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Methode statique</title>
</head>
<body>
    <section>
        <?php
            $interface = new Cci();
            $interface = $interface->Method1();
        ?>
    </section>
     //
     <section>
        <?php
            $interface = new Cci();
            $interface = $interface->Method2();
        ?>
    </section>
    //
    <section>
        <?php
            $interface = new Cci();
            $interface = $interface->Method3();
        ?>
    </section>
</body>
</html>