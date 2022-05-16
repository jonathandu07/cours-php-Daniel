<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>exo champs</title>
</head>
<body>
    <form action="exo-chmaps.php" method="POST">
    <input type="tex" name="number1" placeholder="premier nombre">
    <input type="tex" name="number2" placeholder="deuxième nombre">
    <input type="submit" name="soumettre" value="soumettre">
    </form>
    <table>
    <?php
            if (isset($_POST['soumettre'])){
                $nombre1 = $_POST['number1'];
                $nombre2 = $_POST['number2'];
                while ($nombre1 <= $nombre2) {
                    echo("<tr><td>");
                    echo($nombre1."<br>");
                    echo("</td></tr>");
                    $nombre1++;
                }
            }
        ?> 
    </table>


    
</body>
</html>