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
            <input type="submit" name="choix" value="Smith-&-Wesson">
            <input type="submit" name="choix" value="Sig-Sauer">
        </form>
    </section>

    <?php
if (isset($_POST['choix'])){
    $operation = $_POST['choix'];

            switch( $operation )
            {
                case "Glock" : $result = readfile('./txt/glock.txt');
                echo "<p>Lecture avec readfile()<br><br>";
                echo "</p>";
                break;
                case "Glock" : $result = fopen('./txt/glock.txt', 'a+');
                echo "<p>Lecture avec fpassthru()<br><br>";
                fpassthru($file);
                fclose($file);
                echo "</p>";
                break;
                case "Glock" : $result = file('./txt/glock.txt');
                foreach($filef as $index => $val){
                    echo "<br>".$val;
                }
                echo "</p>";
                break;

                case "Lebel" : $result = readfile('./txt/lebel.txt');
                echo "<p>Lecture avec readfile()<br><br>";
                echo "</p>";
                break;
                case "Lebel" : $result = fopen('./txt/lebel.txt', 'a+');
                echo "<p>Lecture avec fpassthru()<br><br>";
                fpassthru($file);
                fclose($file);
                echo "</p>";
                break;
                case "Lebel" : $result = file('./txt/lebel.txt');
                foreach($filef as $index => $val){
                    echo "<br>".$val;
                }
                echo "</p>";
                break;

                case "Smith-&-Wesson" : $result = readfile('./txt/smith.txt');
                echo "<p>Lecture avec readfile()<br><br>";
                echo "</p>";
                break;
                case "Smith-&-Wesson" : $result = fopen('./txt/smith.txt', 'a+');
                echo "<p>Lecture avec fpassthru()<br><br>";
                fpassthru($file);
                fclose($file);
                echo "</p>";
                break;
                case "Smith-&-Wesson" : $result = file('./txt/smith.txt');
                foreach($filef as $index => $val){
                    echo "<br>".$val;
                }
                echo "</p>";
                break;

                case "Sig-Sauer" : $result = readfile('./txt/sig.txt');
                echo "<p>Lecture avec readfile()<br><br>";
                echo "</p>";
                break;
                case "Sig-Sauer" : $result = fopen('./txt/sig.txt', 'a+');
                echo "<p>Lecture avec fpassthru()<br><br>";
                fpassthru($file);
                fclose($file);
                echo "</p>";
                break;
                case "Sig-Sauer" : $result = file('./txt/sig.txt');
                foreach($filef as $index => $val){
                    echo "<br>".$val;
                }
                echo "</p>";
                break;
            }
        }
    ?>
</body>
</html>