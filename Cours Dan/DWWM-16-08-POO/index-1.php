<?php
include_once('apprenant.class.php');


?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <title> La POO</title>

</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label> Saisir votre texte</label>
        <input type="text" name="chaine" />
        <input type="submit" name="envoyer" value="ENVOYER" />

    </form>

</body>

</html>
<?php
if (isset($_POST['envoyer'])) {
    $texte = $_POST['chaine'];
    $traitement = new Apprenant;
    $traitement->setvaleur($texte);
    echo $traitement->getvaleur();
}
?>