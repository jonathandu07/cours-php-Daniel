<?php
include_once('class/traitement.class.php');
?>
<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <title>Programme POO PHP</title>
</head>

<body>
    <section class="bloc1">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <label> Saisir votre chaine de caractère</label>
            <input type="text" name="texte" required />
            <input type="submit" name="envoyer" value="TRATEMENT" />
        </form>
    </section>
    <section class="bloc2">
        <?php


        if (isset($_POST['envoyer'])) {

            $txt = new Traitement;
            $txt->setString($_POST['texte']);
            echo '<br />';
            echo $txt->getString();
            echo '<br />';
            echo $txt->chartA(1);
            echo '<br />';
            echo $txt->longueur();
            echo '<br />';
            echo $txt->substring(0, 2);
            echo '<br />';
            echo $txt->majuscule();
            echo '<br />';
            echo $txt->minuscule();
            echo '<br />';
        }

        ?>
    </section>
</body>

</html>