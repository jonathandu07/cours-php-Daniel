<?php
class CompteBancaire {
	private $nom;
	private $solde;
	const DEVISE = "Euros";
	
	public function __construct($nom, $solde) {
		$this->setNom($nom);
		$this->setSolde($solde);
	}
	
	public function setNom($nom) {
		if(is_string($nom)) {
			$this->nom=$nom;
		}
	}
	
	public function setSolde($solde) {
		if($solde > 0) {
			$this->solde=$solde;
		}
	}
	
	public function getNom() {
		return $this->nom;
	}
	
	public function getSolde() {
		return $this->solde;
	}
	
	public function crediter($ajout) {
		if($ajout > 0) {
			$this->solde += $ajout;
			echo '<br />Le compte a été crédité de ' .$ajout. ' ' .self::DEVISE;
		}
	}
	
	public function retrait($retirer) {
		if($retirer > 0) {
			$this->solde -= $retirer;
			echo '<br />Le compte a été soustrait de ' .$retirer. ' ' .self::DEVISE;
		}
	}
	
	public function __toString() {
		if(($this->solde) && ($this->nom)) {
			return 'Le solde de ' .$this->nom. ' est de ' .$this->solde. ' ' .self::DEVISE;
		} else {
			return 'Une erreur est survenue !';
		}
	}
}