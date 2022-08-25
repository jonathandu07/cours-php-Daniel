<?php
require __DIR__ . '\database-connection.php';

$statement = $pdo->prepare("INSERT INTO user  VALUES (DEFAULT,?,?)");

$users=[
    'FNom'=>'Hugo',
    'FStage'=>'Ecriture'
];

$statement->bindParam(1, $users['FNom']);
$statement->bindParam(2, $users['FStage']);
$users['FNom'] = "Daniel";

$statement->execute();

if($statement){
    echo "<br/>";
    echo "Nouvel enregistrement avec succés <br/>";
}else{
    echo "Echec mission";
}