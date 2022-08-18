<?php
    include_once( "./class/methode.class.php");
    include_once( "./heritage.php");
    include_once( "./class_abstract.php");
    include_once( "./try_catch.php");
    include_once( "./get_error.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Methode statique</title>
</head>
<body>
    <?php
        $objet=new Facture();
        echo "<section>".$objet -> affichageAttrbut()."</section>";
        echo "<br/>";

        //echo "<hr/>";

        $objet2=new Facture();
        $objet2 -> modifieAttrbut('PH');
        echo "<section>".$objet2 -> affichageAttrbut()."</section>";
        echo "<br/>";

        //echo "<hr/>";

        echo "<section>".Facture::montantTtc(100)."</section>";

        //echo "<hr/>";

        $objet3=new Facture();
        $objet3 -> modifieAttrbut2('Wallah');
        echo "<section>".$objet3 -> affichageAttrbut2()."</section>";
        echo "<br/>";
    ?>

    <section>
        <?php
            $objet=new Mere();

            echo $objet->methode1();
        ?>
    </section>

    <section>
        <?php
            $objet2=new Fille();
            echo $objet2->methode1();
        ?>
    </section>

    <section>
        <?php
            //$objet3=new A();
            //$objet3->methode();
        ?>
    </section>

    <section>
        <?php
            $objet3=new B();
            //$objet3 = methode();
            $objet3->methode();
            //echo $objet3->methode();
        ?>
    </section>
</body>
</html>