<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>valide</title>
</head>
<body>
    <section>
        <h1>Mot de passe valide</h1>
    <?php
        if(isset($_COOKIE['Pseudo'])&(isset($_COOKIE['Password']))){
            echo "<h3>".$_COOKIE['Pseudo'].' '.$_COOKIE['Password']."</h3>";
        }
    ?>
    <button id="retour">Retour</button>
    </section>

</body>
</html>
<script>
    document.getElementById('retour').addEventListener('click', () => {
    history.back();
  });
</script>