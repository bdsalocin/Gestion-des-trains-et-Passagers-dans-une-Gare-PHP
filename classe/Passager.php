<?php 

class Passager {

    public string $passager;
    public int $numeroBillet;
    public int $idTrain;

    public function __construct($passager, $numeroBillet, $idTrain) {
        $this->passager = $passager;
        $this->numeroBillet = $numeroBillet;
        $this->idTrain = $idTrain;
    }

    public static function afficherPassager(Passager $passager) {
        echo "Passager : "  . $passager->passager 
                            . " | Billet n° " 
                            . $passager->numeroBillet 
                            . " | Train assigné : " 
                            . $passager->idTrain  
                            . " \n"; 
    }
    
    public static function ajouterPassager($passager, $numeroBillet, $idTrain) {
        return new self($passager, $numeroBillet, $idTrain);
    }
}