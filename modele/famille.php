<?php

class famille{
    private $idfamille;
    private $libellefamille;

    public function __construct($unidfamille, $unlibellefamille) {
        $this->idfamille=$unidfamille;
        $this->llibellefamille=$unlibellefamille;  
    }
    
    public function getidfamille()
    {
        return $this->idfamille;
    }

    public function getlibellefamille()
    {
        return $this->libellefamille;
    }
}
