<?php
include('class/class_article.php');

$ordi=new Article;

$ordi->setNom("ASUS");
$ordi->setPrix(990);

echo $ordi->getPrix().'<br/>';

$ordi->ajoutTransport(20,50);

echo $ordi->getNom().'<br/>';
echo $ordi->getPrix().'<br/>';

?>




