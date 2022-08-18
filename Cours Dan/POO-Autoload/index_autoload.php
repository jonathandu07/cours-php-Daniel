<?php
//Auto chargement de classes (Autoload)


//Imaginons un instant qu'on aura besoin de 6 classes qui seront instanciées toutes dans le même document PHP.
// Vous imaginez la pagaille!

//La solution qui parait évidente consiste à déclarer chaque classe dans un document PHP à part.
// En effet, les développeurs PHP ont pour coutume de nommer la page qui contient la définition
// de la classe avec le même nom que celle-ci suivi de .class puis .php. Le .class sert à distinguer
// les pages de définition de classes des pages

//A partir de la version 5 de PHP, une fonctionnalité qui permet le chargement dynamique des classes
// est apparue permettant ainsi de faciliter au développeur l'inclusion des fichiers dont il aura besoin.

//Fonction spl_autoload_register()

//Eenregistre une fonction de notre choix dans la pile d'autoload.
// Cette pile est destinée à enregistrer des fonctions et les appeler, d'une manière implicite, 
//quand on en aura besoin. De cette manière, si on fait appel à une classe
// (instanciation, héritage ou appel statique d'un membre) l'autoload se charge d'appeler la fonction 
//qui permet d'inclure la classe souhaitée

spl_autoload_register(function($class){
	include('class/'.$class.'.class.php');
});


$texte=new Texte();
echo $texte.'<br />';

$valeur=new Valeur();
echo $valeur->getAffichage();

$valeur=new Valeur2();
echo $valeur->getAffichage();

