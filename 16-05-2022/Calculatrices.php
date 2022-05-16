<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculatrice</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="val1" placeholder="rentre un nombre" maxlength="6" required>
        <input type="text" name="val2" placeholder="rentre un nombre" maxlength="6" required>
        <!-- <button type="submit" name="calculer">=</button> -->
        <button type="reset">C</button>
        <button value="add" name="operation">+</button>
        <button value="mul" name="operation">x</button>
        <button value="sous" name="operation">-</button>
        <button value="div" name="operation">:</button>
    </form>

    <table>
        <?php
            function additioner($val1, $val2){
            return $val1 + $val2;
            }


            function diviser($val1, $val2){
            return $val1 / $val2;
            }

            function multiplier($val1, $val2){
            return $val1 * $val2;
            }

            function soustraire($val1, $val2){
            return $val1 - $val2;
            }

            //  seconde partie

            if (isset($_POST['val1'])&isset($_POST['val2'])&isset($_POST['operation'])){
            $val1 = $_POST['val1'];
            $val2 = $_POST['val2'];
            $operation = $_POST['operation'];

            if ( is_numeric( $val1 )&is_numeric( $val2 )){
                if( $operation != null )
                {
                    switch( $operation )
                    {
                        case "add" : $result = additioner($val1,$val2);
                        echo("<tr><td>"); 
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
            }
            else
            {
            echo( "Données invalide, veuillez ré-essayer ");
            }

            }

?>

    </table>
    
</body>
</html>