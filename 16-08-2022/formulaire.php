<?php
    include_once("./class/traitement.class.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Formulaire</title>
</head>
<body>
    <section class="container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="text" class="form-control" placeholder="écire" required>
            <input type="submit" value="submit" name="submit" class="submit">
        </form>
    </section>
    
    <section>
        
    </section>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $traitement = new traitement();
        $traitement->setString($_POST['text']);
        echo $traitement -> getString();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> chartA(1);
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> textLen();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> indexof();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> subText();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> tableau();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> majuscule();
        echo "<br/>";
        echo "<hr/>";
        echo $traitement -> minuscule();
    }
?>