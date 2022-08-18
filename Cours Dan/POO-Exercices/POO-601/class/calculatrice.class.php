<?php
class Calculatrice
{
	// Attributs 
	public $nombre1;
	public $nombre2;
	public $resultat;

	// Méthodes  
	public function __construct($nombre1, $nombre2)
	{
		$this->nombre1 = $nombre1;
		$this->nombre2 = $nombre2;
	}
	public function _destruct()
	{
	}
	public function additionner()
	{
		$this->resultat = $this->nombre1 + $this->nombre2;
		return $this->resultat;
	}
	public function multiplier()
	{
		$this->resultat = $this->nombre1 * $this->nombre2;
		return $this->resultat;
	}
	public function diviser()
	{
		$this->resultat = $this->nombre1 / $this->nombre2;
		return $this->resultat;
	}
	public function soustraire()
	{
		$this->resultat = $this->nombre1 - $this->nombre2;
		return $this->resultat;
	}
}
