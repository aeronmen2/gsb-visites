<?php

class medecin{
    private $idmedecin;
    private $nommedecin;
    private $prenommedecin;
    private $adressemedecin;
    private $telmedecin;
    private $specialitecomplementaire;
    private $departement;

    public function __construct($unidmedecin, $unnommedecin, $unprenommedecin,$uneadressemedecin,$untelmedecin,$unespecialitecomplementaire,$undepartement) {
        $this->idmedecin=$unidmedecin;
        $this->nommedecin=$unnommedecin;  
        $this->prenommedecin=$unprenommedecin;  
        $this->adressemedecin=$uneadressemedecin;  
        $this->telmedecin=$untelmedecin;  
        $this->specialitecomplementaire=$unespecialitecomplementaire;  
        $this->departement=$undepartement;  
    }
    
    public function getidmedecin()
    {
        return $this->idmedecin;
    }

    public function getnommedecin()
    {
        return $this->nommedecin;
    }

    public function getprenommedecin()
    {
        return $this->prenommedecin;
    }

    public function getadressemedecin()
    {
        return $this->adressemedecin;
    }

    public function gettelmedecin()
    {
        return $this->telmedecin;
    }

    public function getspecialitecomplementaire()
    {
        return $this->specialitecomplementaire;
    }

    public function getdepartement()
    {
        return $this->departement;
    }
}
