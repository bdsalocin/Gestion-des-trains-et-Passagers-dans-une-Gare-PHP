<?php
require_once '../classe/Gare.php';
require_once '../classe/Passager.php';

class Gare {
    public int $idTrain;
    public string $destination;
    public int $heureDepart;
    public string $plateforme;
    public string $passager;


    public function __construct($idTrain, $destination, $heureDepart, $plateforme, $passager) {
        $this->idTrain = $idTrain;
        $this->destination = $destination;
        $this->heureDepart = $heureDepart;
        $this->plateforme = $plateforme;
        $this->passager = $passager;
    }

    public static function afficherInfoGare(Gare $gare) {
    echo " === Train : "    . $gare->idTrain 
                            . " | Destination : " 
                            . $gare->destination 
                            . " | Départ : " 
                            . $gare->heureDepart
                            . "H | Plateforme : "
                            . $gare->plateforme
                            . " - Passager : " 
                            . $gare->passager
                            . " - Passager : " 
                            . $gare->passager
                            . " === "
                            . " \n"; 
    }

    public static function ajouterGare($idTrain, $destination, $heureDepart, $plateforme, $passager) {
        return new self($idTrain, $destination, $heureDepart, $plateforme, $passager);
    }

}

$gares = [
    $gare1 = Gare::ajouterGare(1, "Barcelone", 12, "A", "Pedro", "Gavi"),
    $gare2 = Gare::ajouterGare(2, "Madrid", 10, "B", "Rodrigo"),
    $gare3 = Gare::ajouterGare(3, "Paris", 14, "C", "Aucun passager assigné")
];

foreach($gares as $gare) {
Gare::afficherInfoGare($gare);
}