<?php
    $longueur=5;
    $compteur=0;
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Do While</title>
</head>
<body>
    <form action="exo-21.php" method="post">
        <?php while(++$compteur < $longueur): ?>
        
            <input type="text"/>
        <?php endwhile; ?>
   </form>
</body>
</html>