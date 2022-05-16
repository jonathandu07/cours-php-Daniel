
  <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Mi primera pagina en PHP</title>
</head>

<body>
    <?php
        // création d'une boucle qui va jusqu'à 10
        $ligne=1;
        echo("<table>");
        while($ligne<11){
            echo("<tr><td>");
            echo $ligne;
            echo ("</td></tr>");

            $ligne++;

        }
        echo("</table>");
    ?>
</body>

</html>