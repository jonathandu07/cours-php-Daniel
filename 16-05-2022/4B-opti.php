<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>affichage</title>
</head>
<body>
    <section>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <input type="submit" name="choix" value="Glock">
            <input type="submit" name="choix" value="Lebel">
            <input type="submit" name="choix" value="Smith & Wesson">
            <input type="submit" name="choix" value="Sig Sauer">
        </form>
    </section>

    <?php
if (isset($_POST['choix'])){
    $operation = $_POST['choix'];

            switch( $operation )
            {
                case "redfil" : $result = readfile('./txt/glock.txt');
                echo("<tr><td>");
                echo "<p class='bg-primary'>Lecture avec readfile()<br><br>"; 
                echo( "Résultat de l'addtion est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "mul" : $result = multiplier($val1,$val2);
                echo("<tr><td>");
                echo( "Résultat de la multiplication est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "sous" : $result = soustraire($val1,$val2);
                echo("<tr><td>");
                echo( "Résultat de la soustraction est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "div" : $result = diviser($val1,$val2);
                echo("<tr><td>");
                echo( "Résultat de la division est:<b> $result</b>" );
                echo("</td></tr>");break;
            }
        }
    ?>
</body>
</html>