<?php

class User
{
    private $nom;
    private $age;
    private $sexe;

    public function __construct()
    {
        $this->nom;
        $this->age;
        $this->sexe;
    }

    public function __destruct()
    {
        
    }

    public function setNom($modifierNom){
        return $this->nom = $modifierNom;
    }

    public function setAge($modifierAge){
        return $this->age = $modifierAge;
    }

    public function setSexe($modifierSexe){
        return $this->sexe = $modifierSexe;
    }

    // #######################

    public function getNom(){
        return $this->nom;
    }

    public function getAge(){
        return $this->age;
    }

    public function getSexe(){
        return $this->sexe;
    }

    // #######################

    public function __toString(){
        $txt = '';
        $txt.="Bonjour, c'est moi ".$this->nom.'<br/>';
        $txt.="Mon age est de ".$this->age.'<br/>';
        $txt.= ($this->sexe) ? "je suis un homme" : "Je suis une femme <br/>";
        return $txt;
    }
}

$User1 = new User();
$User1 -> setNom('Hugo');
$User1 -> setAge('24 ans');
$User1 -> setSexe('Homme');
echo $User1->getNom().'<br/>';
echo '<hr />';
echo $User1->getAge().'<br/>';
echo '<hr />';
echo $User1->getSexe().'<br/>';

echo '<hr />';
echo '########################################';
echo '<hr />';

$User2 = new User();
$User2 -> setNom('Bernard');
$User2 -> setAge('66 ans');
$User2 -> setSexe('Homme');
echo $User2->getNom().'<br/>';
echo '<hr />';
echo $User2->getAge().'<br/>';
echo '<hr />';
echo $User2->getSexe().'<br/>';

echo '<hr />';
echo '########################################';
echo '<hr />';

$User3 = new User();
$User3 -> setNom('Sylvie');
$User3 -> setAge('26 ans');
$User3 -> setSexe('Femme');
echo $User3->getNom().'<br/>';
echo '<hr />';
echo $User3->getAge().'<br/>';
echo '<hr />';
echo $User3->getSexe().'<br/>';