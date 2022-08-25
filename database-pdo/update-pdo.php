<?php
require __DIR__ . '\database-connection.php';


require __DIR__ . '\database-connection.php';


$statement = $pdo->prepare('UPDATE user  SET Nom=:nom WHERE id =:id');
$statement->bindValue(':id', 1);
$statement->bindValue(':nom', 'Alexandre');
$statement->execute();

$object = $statement->fetchObject('Utilisateur');
echo "<br/>";
$object -> Traitement();