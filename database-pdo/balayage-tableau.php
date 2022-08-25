<?php

require __DIR__ . '\database-connection.php';


class Utilisateur
{
    function Traitement(){
        echo "Bonjour ".$this->nom.'&nbsp;'.$this->stage;
    }
}
$statement = $pdo->prepare('SELECT * FROM user  WHERE id =:id');
$statement->bindValue(':id', 1);
$statement->execute();

$object = $statement->fetchObject('Utilisateur');
echo "<br/>";
$object -> Traitement();
