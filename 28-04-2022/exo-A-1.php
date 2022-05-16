<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma premiere page PHP</title>
</head>
<body>
    <section>
        <form action="exo_10.php" method="POST" enctype='multipart/form-data'>
            <label>Chaine de caracteres</label>
            <input type="text" name="chaine" placeholder="Saisie votre texte"  maxlength="25" required/>
            <input type="submit" value="Soumettre" name="envoyer"/> 
            <input type="reset" value="Effacer" name="annuler"/> 
            <br/>
            <label>Caractere à comptabiliser</label>
            <input type="text" name="trouver" placeholder="Saisie votre texte"  maxlength="1" required/>

            <label>Caractere à remplacer</label>
            <input type="text" name="remplacer" placeholder="Saisie votre texte"  maxlength="1" required/>
        </form>
    </section>
    
        <?php 
        if (isset($_POST['envoyer'])){
            $texte=$_POST['chaine'];

            $compteur=0;

            // Compter le nom de caracteres avant traitement
            $nb_avant_traitement=strlen($texte);
            echo "vous avez saisie : ".$nb_avant_traitement." caracteres<br/>";


            // Supprimer les chaines vides en debut et fin
        
            $texte=chop($texte);

            // Compter le nombre de caracteres apres traitement
            $nb_apres_traitement=strlen($texte);
            echo "vous avez saisie : ".$nb_apres_traitement." caracteres<br/>";

            echo("<table>");
                
                while($compteur<$nb_apres_traitement){

                    echo("<tr><td>");

                        echo($texte[$compteur]);

                    echo("</td></tr>");

                    $compteur++;
                }

            echo("<table>");
            
            // Compter le nom de caracteres à remplacer suivant son choix
            $caractere = $_POST['trouver'];
             
            // Parcourir la chaine de caractère
            $compteur=0;
            $nbcar = 0;
            while($compteur<$nb_apres_traitement){
                if($caractere==$texte[$compteur]){
                    $nbcar++;
                }


                $compteur++;
            }

            if($nbcar!=0){
                echo("Vous avez dans votre chaine de caractere : $nbcar caractères trouvés");
            }else{
                echo("Vous n'avez aucun caractere trouvé" );
            }

            // Modification de la lettre 
            $caractereReplace = $_POST['remplacer'];
             
            // Parcourir la chaine de caractère
            echo("<section>");
            $compteur=0;
                echo("<table>");
                    while($compteur<$nb_apres_traitement){
                        echo("<tr><td>");
                            if($caractere==$texte[$compteur]){
                                $texte[$compteur]=$caractereReplace;
                                echo($texte[$compteur]);
                            }else{
                                echo($texte[$compteur]);
                            }
                        echo("</td></tr>");

                        $compteur++;
                    }
                echo("</table>");
            echo("</section>");
        }

        ?>

   
</body>
</html>