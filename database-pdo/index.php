<?php
 require __DIR__ . '\database-connection.php';
 $statement= $pdo -> prepare('SELECT * FROM user');

$data=$statement->execute();

$data=$statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Affichage</title>
</head>
<body>
    <section>
    <?php
    $nb=count($data);
    for ($i=0; $i<$nb; $i++){
        echo "<br/>";
        echo "|"."&nbsp".$data[$i]['id']."&nbsp".$data[$i]['nom']."&nbsp".$data[$i]['stage'];
        echo "<hr/>";
    }
    ?>
    </section>

    <section>
        <?php
            
        ?>
    </section>

</body>
</html>