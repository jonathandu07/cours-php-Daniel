<!-- Déclaration des variables qui seront utilisées dans le second module PHPS -->
<?php
$nom= "Jean Aimare";
$titre_du_jour="vive les geek";
$date=date("d/m/v");
$heure=date("H:i:s");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccs/main.css">
    <title>Mi primera pagina en PHP</title>
</head>

<body>
    <p>
        <?php
        echo("Bonjour ".$nom."<br/>");
        echo("nous sommes le: ".$date.",il est :".$heure."<br/>");
        ?>

    </p>
</body>

</html>
