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
    function glock($val1, $val2){
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
    ?>
</body>
</html>