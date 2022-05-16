<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>formulaire</title>
</head>
<body>
    <section>
        <h1>
            Ajouter vos compétences
        </h1>
        <form action="correction.php" method="POST">
            <input type="text" name="choix">
            <input type="submit" name="envoyer" value="Soumettre">
        </form>
    </section>
    <section>
        <h1>
            Ajouter vos compétences
        </h1>
        <form action="correction.php" method="POST">
            <?php
                if (isset($_POST['envoyer'])){
                    for($i=1;$i<$_POST['choix']+1;$i++){
                        echo("<input type'text' name='choix[]'><br/>");
                    }
                }
            ?>
            <input type='submit' value='soumettre' name='soumettre'/>;
        </form>
    </section>

    <section>
        <table>
            <?php
            if(isset($_POST['soumettre'])){
            // print_r($_POST['choix']);
            $nb=count($_POST['choix']);
                for($i=0;$i<$nb;$i++){
                    echo("<tr><td>".$_POST['choix'][$i]."</td></tr>");
                }

                
        }
            ?>
        </table>

    </section>

    <section>
        <table>
            <?php
            foreach($_POST['choix'] as $indice=>$valeur){
                echo("<tr><td>".$indice."</td><td>".[$valeur]."</td></tr>");
            }
            ?>
        </table>

    </section>
    
</body>
</html>