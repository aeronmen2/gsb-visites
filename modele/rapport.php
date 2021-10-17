<?php

class rapport{
    private $idrapport;
    private $daterapport;
    private $motif;
    private $bilanreport;
    private $idvisiteur;
    private $idmedecin;

    public function __construct($unidrapport,$undaterapport,$unbilanreport,$unidvisiteur,$unidmedecin) {
        $this->idrapport=$unidrapport;
        $this->daterapport=$undaterapport;
        $this->bilanreport=$unbilanreport;
        $this->idvisiteur=$unidvisiteur;
        $this->idmedecin=$unidmedecin;
    }
    
    public function getidrapport()
    {
        return $this->idrapport;
    }

    public function getdaterapport()
    {
        return $this->daterapport;
    }

    public function getbilanreport()
    {
        return $this->bilanreport;
    }

    public function getidvisiteur()
    {
        return $this->idvisiteur;
    }

    public function getidmedecin()
    {
        return $this->idmedecin;
    }
}