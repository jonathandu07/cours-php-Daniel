<?php
class Legume {
	private $nom;
	private $prix;
	private $quantite;
	
	
	public function setNom($nomLegume) {
		$this->nom = $nomLegume;
	}
	public function setPrix($prixLegume) {
		
			$this->prix = $prixLegume;
		
	}
	public function setQuantite($quantiteLegume) {
			$this->quantite = $quantiteLegume;
	}
	
	public function getNom() {
		return $this->nom;
	}
	public function getPrix() {
		return $this->prix;
	}
	public function getQuantite() {
		return $this->quantite;
	}
	
	public function Calcul() {
		
			return ($this->prix * $this->quantite) ;
		
	}
}