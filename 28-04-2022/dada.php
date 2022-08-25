<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            <form action="dada.php" name="choix">
                <select name="pays">
                    <option value="esp" name="esp">Espagnol</option>
                    <option value="en" name="en">Anglais</option>
                    <option value="fr" name="fr">Français</option>
                    <option value="de" name="de">Allemand</option>
                </select> 
                <input type="submit" name="submit" value="soumettre">
            </form>
        </div>
    </form>
    <?php
    // $langue=array($en,$fr,$esp,$de);
    if(isset($_POST['submit'])){
        if ($langue = $_POST['esp']){
            $langue = 'esp';
        }
    }
    ?>
    <?php switch($langue) :
     case "fr":?>
    <h1>Bienvenue</h1>
    <?php break; ?>
    <?php case "en":  ?>
    <h1>Welcome</h1>
    <?php break; ?>
    <?php case "es": ?>
    <h1>Bienvenido</h1>
    <?php break; ?>
    <?php case "de": ?>
    <h1>Wilkomen</h1>
    <?php break; ?>
    <?php default: ?>
    <h1>Echec mission</h1>
    <?php endswitch ?>

</body>
</html>