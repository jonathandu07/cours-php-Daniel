<?php
require __DIR__ . '\database-connection.php';


$statement= $pdo -> prepare('SELECT * FROM user');

$data=$statement->execute();

$data=$statement->fetchAll();

echo "<br/>";

// print_r($data);
$nb=count($data);
echo "<hr/>";
// echo "<br/>";
for ($i=0; $i<$nb; $i++){
    echo "<br/>";
    echo $data[$i]['id'];
    echo "&nbsp";
    echo $data[$i]['nom'];
    echo "&nbsp";
    echo $data[$i]['stage'];
    echo "<br/>";
    echo "<hr/>";
}
?>