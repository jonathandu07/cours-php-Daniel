<?php
require __DIR__ . '\database-connection.php';


$statement= $pdo -> prepare('SELECT * FROM user');

$data=$statement->execute();

$data=$statement->fetchAll();

echo "<br/>";

// print_r($data);
$nb=count($data);
echo "<hr/>";

for ($i=0; $i<$nb; $i++){
    echo "<br/>";
    echo "|"."&nbsp".$data[$i]['id']."&nbsp".$data[$i]['nom']."&nbsp".$data[$i]['stage'];
    echo "<hr/>";
}
// for ($i=0; $i<$nb; $i++){
//     echo "<br/>";
//         echo implode ("|", $data[$i])."<br/>";
//         echo "<hr/>";
// }

// for ($i =0; $i<$nb; $i++){
//     echo "<br/>";
//         $donne=$data[$i];
//         for ($j=0; $j<count($donne); $j++){
//             echo "&nbsp".$donne[$j];
//         }
//     echo "<hr/>";
// }

?>