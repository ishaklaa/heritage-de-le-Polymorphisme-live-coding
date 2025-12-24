<?php
include_once "avion.php";
include_once "voiture.php";

$avion = new Avion ("boeing","800", "1000" );

$voiture = new Voiture ("toyota","100", "1000" );
$avion->seDeplacer();







?>