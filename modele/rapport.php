<?php

class rapport{
    private $idrapport;
    private $daterapport;
    private $motif;
    private $bilanrapport;
    private $idvisiteur;
    private $idmedecin;

    public function __construct($unidrapport,$undaterapport,$unmotif,$unbilanrapport,$unidvisiteur,$unidmedecin) {
        $this->idrapport=$unidrapport;
        $this->motif=$unmotif;
        $this->daterapport=$undaterapport;
        $this->bilanrapport=$unbilanrapport;
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

    public function getmotifrapport()
    {
        return $this->motif;
    }

    public function getbilanrapport()
    {
        return $this->bilanrapport;
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