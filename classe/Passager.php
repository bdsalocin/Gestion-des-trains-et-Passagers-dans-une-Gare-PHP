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

    public static function afficherPassagers(Passager $passager) {
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

$passagers = [
    $passager1 = Passager::ajouterPassager("Pedri", 101, 1),
    $passager2 = Passager::ajouterPassager("Gavi", 102, 1),
    $passager3 = Passager::ajouterPassager("Rodrigo", 103, 2)
];

foreach($passagers as $passager) {
    Passager::afficherPassagers($passager);
}