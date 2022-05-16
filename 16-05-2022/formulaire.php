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
        <input type="text" name="nom" placeholder="nom" required maxlength="25">
        <input type="text" name="objet" placeholder="objet" required maxlength="25">
        <textarea name="message" id="message" cols="30" rows="10" maxlength="250"></textarea>
        <input type="submit" value="valider" name="valider">
        <input type="reset" value="annuler">
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
            fwrite($fileopen,('Nom : '.$nom.' '.'Objet : '.$objet.$message.date("j,F, Y, g:i a")));
            # On ferme le fichier proprement
            fputs($fileopen, "\n");
            fclose($fileopen);
        } 

    ?>
    <!-- <a href="formulaire.php?nom=<?= rawurlencode($nom) ?>">Publier message</a> -->
    <table>
        <?php
        $contents=file_get_contents("./txt/formulaire.txt");
        $lines=explode("\n",$contents);
        foreach($lines as $line){
        echo $line.'<br>';

        }
        ?>
    </table>
</body>
</html>