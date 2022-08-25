<?php 
// LA classe PDO

$dsn="mysql:host=localhost;dbname=stagiaire";
$user="root";
$password="";



//connection à la base de donnée

try{
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8']);
echo "Connection réussie";
}catch(PDOException $e) {
    echo "Error: ".$e->getMessage();
} 