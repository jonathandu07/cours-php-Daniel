<?php
    $activite ="Geek & DWWM";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Get</title>
</head>
<body>
    <a href="get2.php?activite=<?= rawurlencode($activite) ?>">Exo Var Session Get</a>
    <!-- en lien avec Get.php -->
    
</body>
</html>