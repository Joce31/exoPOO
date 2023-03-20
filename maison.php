<?php


    class Maison{
        /*----attributs---*/
        private $nom;
        private $longueur;
        private $largeur;
        private $nbrEtage;

        public function __construct($name, $long, $larg, $etage)
        {
            $this->nom = $name;
            $this->longueur = $long;
            $this->largeur = $larg;
            $this->nbrEtage = $etage;

        }
        public function getNom()
        {
            return $this->nom;
        }        
        public function getLongueur()
        {
            return $this->longueur;
        }        
        public function getLargeur()
        {
            return $this->largeur;
        }
        public function getnbrEtage()
        {
            return $this->nbrEtage;
        }
        public function setNom($name)
        {
            $this->nom = $name;
        }
        public function setLongueur($long)
        {
            $this->longueur = $long;
        
        }
        public function setLargeur($larg)
        {
            $this->largeur = $larg;
        }
        public function setnbrEtage($etage)
        {
            $this->nbrEtage = $etage;
        }
        public function calcSurface()
        {
           $surface = $this->longueur * $this->largeur * $this->nbrEtage;
            return $surface;
        }
    }

?>
