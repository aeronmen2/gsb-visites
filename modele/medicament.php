<?php

class medicament{
    private $idmedicament;
    private $nomcommercial;
    private $idfamille;
    private $composition;
    private $effets;
    private $contreindication;

    public function __construct($unidmedicament, $unnomcommercial, $unidfamille, $unecomposition, $deseffets, $unecontreindication) {
        $this->idmedicament=$unidmedicament;
        $this->nomcommercial=$unnomcommercial;
        $this->idfamille=$unidfamille;
        $this->composition=$unecomposition;
        $this->effets=$deseffets;
        $this->contreindication=$unecontreindication;
    }
    
    public function getidmedicament()
    {
        return $this->idmedicament;
    }

    public function getnomcommercial()
    {
        return $this->nomcommercial;
    }

    public function getidfamille()
    {
        return $this->idfamille;
    }

    public function getcomposition()
    {
        return $this->composition;
    }

    public function geteffets()
    {
        return $this->effets;
    }

    public function getcontreindications()
    {
        return $this->contreindications;
    }

}

