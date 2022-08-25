<?php
require __DIR__ . '\database-connection.php';

$statement = $pdo->prepare("INSERT INTO user  VALUES (DEFAULT,
'Michel',
'Web'
)");

$statement->execute();