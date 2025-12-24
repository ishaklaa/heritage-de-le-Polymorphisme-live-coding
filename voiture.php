<?php
include_once "vehicule.php";
class Voiture extends Vehicule
{
    private $hp;
    public function __construct($marque, $vitesseMax, $hp)
    {
        parent:: __construct($marque, $vitesseMax);
        $this->hp = $hp;
    }

    public function seDeplacer(){
        echo "cette voiture roule à" . $this->vitesseMax . "km/h \n";

    }
    
}



 
 

?>