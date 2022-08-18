<?php
include_once("user.class.php");

if(isset($_POST['submit'])) {
    $User1 = new User();

    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];

    $User1->setNom($nom);
    $User1 -> setAge($age);
    $User1 -> setSexe($sexe);

    echo $User1->getNom().'<br/>';
    echo '<hr />';
    echo $User1->getAge().'<br/>';
    echo '<hr />';
    echo $User1->getSexe().'<br/>';
 }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Formulaire</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="nom" placeholder="nom" required>
        <input type="text" name="age" placeholder="age" required>
        <input type="text" name="sexe" placeholder="sexe" required>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>