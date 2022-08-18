<?php
 include('class/class_eleve.php');
 

$stagiaire=new Eleve;

$stagiaire->setPrenom('Sandrine');

echo $stagiaire->getPrenom().'<br>';
echo 'Cet élève a été inscrit le '.$stagiaire->dateinscription;


