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
            <input type="submit" name="glock" value="Glock">
            <input type="submit" name="Lebel" value="Lebel">
            <input type="submit" name="Smith" value="Smith & Wesson">
            <input type="submit" name="Sig" value="Sig Sauer">
        </form>
    </section>
    
    <?php
if(isset($_POST['glock'])){

                

    echo "<p class='bg-primary'>Lecture avec readfile()<br><br>";

    readfile('./txt/glock.txt');

    echo "</p>";

    $file = fopen('./txt/glock.txt', 'a+');

    echo "<p class='bg-success'>Lecture avec fpassthru()<br><br>";

    fpassthru($file);

    fclose($file);

    echo "</p>";

    echo "<p class='bg-warning'>Lecture avec file()<br>";

    $filef = file('./txt/glock.txt');

    foreach($filef as $index => $val){
        echo "<br>".$val;
    }

    echo "</p>";


}

if(isset($_POST['Lebel'])){

    

    echo "Lecture avec readfile()<br>";

    readfile('./txt/lebel.txt');

   

    $file = fopen('./txt/lebel.txt', 'a+');

    echo "<br><br>Lecture avec fpassthru()<br>";

    fpassthru($file);

    fclose($file);

    echo "<br><br>Lecture avec file()";

    $filef = file('./txt/lebel.txt');

    foreach($filef as $index => $val){
        echo "<br>".$val;
    }


}

if(isset($_POST['Smith'])){

    

    echo "Lecture avec readfile()<br>";

    readfile('./txt/smith.txt');

   

    $file = fopen('./txt/smith.txt', 'a+');

    echo "<br><br>Lecture avec fpassthru()<br>";

    fpassthru($file);

    fclose($file);

    echo "<br><br>Lecture avec file()";

    $filef = file('./txt/smith.txt');

    foreach($filef as $index => $val){
        echo "<br>".$val;
    }


}

if(isset($_POST['Sig'])){
    echo "Lecture avec readfile()<br>";

    readfile('./txt/sig.txt');

   

    $file = fopen('./txt/sig.txt', 'a+');

    echo "<br><br>Lecture avec fpassthru()<br>";

    fpassthru($file);

    fclose($file);

    echo "<br><br>Lecture avec file()";

    $filef = file('./txt/sig.txt');

    foreach($filef as $index => $val){
        echo "<br>".$val;
    }
}        
    ?>
</body>
</html>