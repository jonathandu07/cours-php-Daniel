<?php
$fichier=(file_exists('./txt/vote.txt'));
if($fichier){
    // echo 'il existe';
}
else{
    $fichier = fopen("./txt/vote.txt", "a+");
    // echo 'fichier créé';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>vote</title>
</head>
<body>
<section class="main">
        <h1>Vote</h1>
        <form action="vote.php" method="POST">
        <h3>Votant</h3>
        <input type="text" name="nom" placeholder="nom" required maxlength="25" class="nom" required>
        <input type="text" name="prenom" placeholder="prenom" required maxlength="25" class="objet" required>

        <label for="" name="candidat" value="Napoleon">Napoléon</label>
        <input type="radio" name="vote" value="Napoleon">

        <label for="" name="candidat" value="DeGaule">Charles De Gaule</label>
        <input type="radio" name="vote" value="DeGaule">

        <label for="" name="candidat" value="Alexandre">Alexandre Le Grand</label>
        <input type="radio" name="vote" value="Alexandre">

        <label for="" name="candidat" value="Pape">Pape François</label>
        <input type="radio" name="vote" value="Pape">

        <label for="" name="candidat" value="Poutine">Poutine</label>
        <input type="radio" name="vote" value="Poutine">

        <label for="" name="candidat" value="Jonathan">Jonathan</label>
        <input type="radio" name="vote" value="Jonathan">
        <input type="submit" value="valider" name="valider" class="valider bas">
        <input type="reset" value="annuler" class="annuler bas">
    </form>
    </section>
    <?php 
    if (isset($_POST['vote'])&isset($_POST['nom'])&isset($_POST['prenom'])){
        $vote = $_POST['vote'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $fichier='./txt/vote.txt';
        # Chemin vers fichier texte
        # Ouverture en mode écriture
        $fileopen=(fopen("$fichier",'a'));
        // fputs($fileopen, "\n");
        # Ecriture de "Début du fichier" dansle fichier texte
        fwrite($fileopen,('Nom : '.$nom.'<br/>'.'prenom : '.$prenom.'<br/>'.'vote :'.$vote));
        # On ferme le fichier proprement
        fputs($fileopen, "\n");
        fclose($fileopen);

        setcookie('Nom',$nom,time()+60);
        setcookie('Prenom',$prenom,time()+60);
        setcookie('Vote',$vote,time()+60);
    } 
?>
<!-- <section class="affichage"> -->
    <table>
        <?php
            $contents=file_get_contents("./txt/vote.txt");
            $lignes=explode("\n",$contents);

            foreach($lignes as $ligne){
            echo '<tr>'.'<td>';
            echo $ligne;
            echo '</td>'.'</tr>';
            }
        ?>
</body>
</html>