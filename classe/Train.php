<?php 

class Train {
    public int $idTrain;
    public string $destination;
    public string $heureDepart;
    public string $plateforme;

    public function __construct($idTrain, $destination, $heureDepart, $plateforme) {
        $this->idTrain = $idTrain;
        $this->destination = $destination;
        $this->heureDepart = $heureDepart;
        $this->plateforme = $plateforme;
    }
    
    public static function afficherTrain(Train $train) {
        echo "Train n° "    . $train->idTrain 
                            . " | Destination : " 
                            . $train->destination 
                            . " | Départ : " 
                            . $train->heureDepart 
                            . " | " 
                            . " Plateforme : " 
                            . $train->plateforme 
                            . " \n";
    }
    public static function ajouterTrain($idTrain, $destination, $heureDepart, $plateforme) {
        return new self($idTrain, $destination, $heureDepart, $plateforme);
    }
}