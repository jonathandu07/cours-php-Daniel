<?php
//Programme avec les frais de transport en plus par l'intermédiaire d'une variable de classe
require('class/class_articles.php');

$ordinateur=new Articles;

$ordinateur->setNom("ASUS");
echo $ordinateur->getNom().'<br>';

$ordinateur->setPrix(500);


echo $ordinateur->getprix().'<br>';

echo $ordinateur->getAjoutTransport();


