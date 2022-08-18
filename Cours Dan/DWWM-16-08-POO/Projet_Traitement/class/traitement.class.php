<?php

class Traitement
{

    private $chaine;
    private $longueur;
    public function __construct()
    {
        $this->longueur;
        $this->chaine;
    }
    public function __destruct()
    {
    }
    public function setString($texte)
    {
        $this->chaine = $texte;
    }
    public function getString()
    {
        return $this->chaine;
    }
    public function chartA($pos)
    {
        return substr($this->chaine, $pos, 1);
    }
    public function longueur()
    {
        return $this->longueur = strlen($this->chaine);
    }
    public function substring($deb, $fin)
    {
        return substr($this->chaine, $deb, $deb - $fin + 1);
    }
    public function majuscule()
    {
        return strtoupper($this->chaine);
    }
    public function minuscule()
    {
        return strtolower($this->chaine);
    }
}
