<?php
class FonctionConstructeur
{
    private $nom;
    private $cours;
    private $prenom;
    private $dateInscription;
    private $position;

        public function __construct(){
            echo $this -> dateInscription ='Date incription '.date('d,m,Y').'<br />';
            echo '<hr />';
        }

        public function affichageNom($nom)
        {
            return $this -> nom = $nom;
        }
        public function affichagePrenom($prenom)
        {
            return $this -> prenom = $prenom;
        }
        public function affichageCours($cours)
        {
            return $this -> cours = $cours;
        }
}

$stagiaire = new FonctionConstructeur();

echo $stagiaire-> affichageNom('Dupont').'<br/>';
echo '<hr />';
echo $stagiaire-> affichagePrenom('Christophe').'<br/>';
echo '<hr />';
echo "élève en cours d'".$stagiaire-> affichageCours('Histoire').'<br/>';
echo '<hr />';
echo $stagiaire-> __construct().'<br/>';