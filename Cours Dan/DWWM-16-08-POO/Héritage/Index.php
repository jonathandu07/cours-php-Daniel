<?php
class Mere
{
    protected $attribut = "Bonjour.";
    public function methode1()
    {
        $str = $this->attribut;
        $str .= " Je suis la classe Mère<br />.";
        return $str;
    }
}
class Fille extends Mere
{
    public function methode1()
    {
        $str = Mere::methode1();
        $str .= $this->attribut;
        $str .= " Je suis la classe Fille<br />.";
        return $str;
    }
}
//Test premier
$objet = new Fille();
echo $objet->methode1();
