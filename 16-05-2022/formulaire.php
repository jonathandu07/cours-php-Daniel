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
    <form action="formulaire.php" method="POST">
        <input type="text" name="nom" placeholder="nom" required maxlength="25" class="nom">
        <input type="text" name="objet" placeholder="objet" required maxlength="25" class="objet">
        <textarea name="message" id="message" cols="30" rows="10" maxlength="250" class="message"></textarea>
        <input type="submit" value="valider" name="valider" class="valider">
        <input type="reset" value="annuler" class="annuler">
    </form>

    <?php
        if (isset($_POST['message'])&isset($_POST['nom'])&isset($_POST['objet'])){
            $message = $_POST['message'];
            $nom = $_POST['nom'];
            $objet = $_POST['objet'];
            $fichier='./txt/formulaire.txt';
            # Chemin vers fichier texte
            # Ouverture en mode écriture
            $fileopen=(fopen("$fichier",'a'));
            // fputs($fileopen, "\n");
            # Ecriture de "Début du fichier" dansle fichier texte
            fwrite($fileopen,('Nom : '.$nom. ' <br/> ' .'Objet : '.$objet. ' <br/> ' .'Message :'.$message. ' <br/> ' .'Date :'.date("j,F, Y, g:i a")));
            # On ferme le fichier proprement
            fputs($fileopen, "\n");
            fclose($fileopen);
        } 
    ?>
    <table>
        <?php
            $contents=file_get_contents("./txt/formulaire.txt");
            $lignes=explode("\n",$contents);

            foreach($lignes as $ligne){
            echo '<tr>'.'<td>';
            echo $ligne;
            echo '</td>'.'</tr>';
            }
        ?>
    </table>
</body>
</html>