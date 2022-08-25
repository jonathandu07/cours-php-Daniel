<?php
require __DIR__ . '\database-connection.php';

$statement = $pdo->prepare("INSERT INTO user  VALUES (DEFAULT,?,?)");

$users=[
    'FNom'=>'Ondine',
    'FStage'=>'Datalise'
];

$statement->execute([
    $users['FNom'],
    $users['FStage']
]
    );