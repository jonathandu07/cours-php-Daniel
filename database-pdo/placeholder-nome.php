<?php
require __DIR__ . '\database-connection.php';
$users=[
    'FNom'=>'Jean-Aimare',
    'FStage'=>'Cuisine'
];

$statement = $pdo->prepare("INSERT INTO user  VALUES (DEFAULT,:FNom,:FStage)");

$statement->bindParam(':FNom', $users['FNom']);
$statement->bindParam(':FStage', $users['FStage']);

$statement->execute();

if($statement){
    echo "<br/>";
    echo "Nouvel enregistrement avec succés <br/>";
}else{
    echo "Echec mission";
}