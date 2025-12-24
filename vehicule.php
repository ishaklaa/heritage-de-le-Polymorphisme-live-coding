<?php
class Vehicule
{
    private $marque;
    protected $vitesseMax;
    public function __construct($marque, $vitesseMax)
    {
        $this->marque = $marque;
        $this->vitesseMax = $vitesseMax;
    }
    public function seDeplacer()
    {
        echo "cette vehicule avance à" . $this->vitesseMax . "km/h";
    }
}


