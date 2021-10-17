<?php

class visiteur{
    private $idvisiteur;
    private $nomvisiteur;   
    private $prenomvisiteur;
    private $loginvisiteur;
    private $mdpvisiteur;
    private $adressevisiteur;
    private $cpvisiteur;
    private $villevisiteur;
    private $dateembauchevisiteur;
    private $timespanvisiteur;
    private $ticketvisiteur;

    public function __construct($unidvisiteur,$unnomvisiteur,$unprenomvisiteur,$unloginvisiteur,$unmdpvisiteur,$uneadressevisiteur,$uncpvisiteur,$unevillevisiteur, $unedateembauchevisiteur, $untimespanvisiteur, $unticketvisiteur ) {
        $this->idvisiteur=$unidvisiteur;
        $this->nomvisiteur=$unnomvisiteur;
        $this->prenomvisiteur=$unprenomvisiteur;
        $this->loginvisiteur=$unloginvisiteur;
        $this->mdpvisiteur=$unmdpvisiteur;
        $this->adressevisiteur=$uneadressevisiteur;
        $this->cpvisiteur=$uncpvisiteur;
        $this->villevisiteur=$unevillevisiteur;
        $this->dateembauchevisiteur=$unedateembauchevisiteur;
        $this->timespanvisiteur=$untimespanvisiteur;
        $this->ticketvisiteur=$unticketvisiteur;
    }

    public function getidvisiteur()
    {
        return $this->idvisiteur;
    }

    public function getnomvisiteur()
    {
        return $this->nomvisiteur;
    }

    public function getprenomvisiteur()
    {
        return $this->prenomvisiteur;
    }

    public function getloginvisiteur()
    {
        return $this->loginvisiteur;
    }

    public function getmdpvisiteur()
    {
        return $this->mdpvisiteur;
    }

    public function getadressevisiteur()
    {
        return $this->adressevisiteur;
    }

    public function getcpvisiteur()
    {
        return $this->cpvisiteur;
    }

    public function getvillevisiteur()
    {
        return $this->villevisiteur;
    }

    public function getdateembauchevisiteur()
    {
        return $this->dateembauchevisiteur;
    }
    
    public function gettimespanvisiteur()
    {
        return $this->timespanvisiteur;
    }

    public function getticketvisiteur()
    {
        return $this->ticketvisiteur;
    }
    
}

