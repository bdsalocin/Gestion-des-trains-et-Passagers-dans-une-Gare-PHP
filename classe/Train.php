<?php 

class Train {
    public int $idTrain;
    public string $destination;
    public int $heureDepart;
    public string $plateforme;

    public function __construct($idTrain, $destination, $heureDepart, $plateforme) {
        $this->idTrain = $idTrain;
        $this->destination = $destination;
        $this->heureDepart = $heureDepart;
        $this->plateforme = $plateforme;
    }
    
    public static function afficherPhrase(Train $train) {
        echo "Train n° "    . $train->idTrain 
                            . " | Destination : " 
                            . $train->destination 
                            . " | Départ : " 
                            . $train->heureDepart 
                            . "H | " 
                            . " Plateforme : " 
                            . $train->plateforme 
                            . " \n";
    }
    public static function ajouterUnTrain($idTrain, $destination, $heureDepart, $plateforme) {
        return new self($idTrain, $destination, $heureDepart, $plateforme);
    }
}

$trains = 
[
$train1 = Train::ajouterUnTrain(1, "Barcelone", 12, "A"),
$train2 = Train::ajouterUnTrain(2, "Madrid", 10, "B"),
$train3 = Train::ajouterUnTrain(3, "Paris", 14, "C")
];

foreach($trains as $train) {
    Train::afficherPhrase($train);
}