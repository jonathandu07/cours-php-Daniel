<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Echec</title>
</head>
<body>
    <section>
        <h1>Connexion échouée !</h1>
        <button onclick="retourn()">retour</button>
    </section>
    <?php
    echo "<section>"."<a>"."<h1>".session_id()."</h1>"."</a>"."</section>";
    echo "<section>"."<a>"."<h1>"."<a href='connexion.php'> retour </a>"."</a>"."</h1>"."</section>";
    ?>

    <section class="bas">
        <h4 class="mention">&copy; Jonathan</h4>
    </section>
</body>
<script>
function retourn() {
   window.history.back();
}
</script>
</html>