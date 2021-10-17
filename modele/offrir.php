<?php

class offir{
    private $idrapport;
    private $idmedicament;
    private $quantite;

    public function __construct($unidrapport,$unidmedicament,$unequantite) {
        $this->idrapport=$unidrapport;
        $this->idmedicament=$unidmedicament;  
        $this->quantite=$unequantite;  
    }
    
    public function getidrapport()
    {
        return $this->idrapport;
    }

    public function getidmedicament()
    {
        return $this->idmedicament;
    }

    public function getquantite()
    {
        return $this->quantite;
    }
}
