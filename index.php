<?php
require_once(__DIR__ . '/classe/Train.php');
require_once(__DIR__ . '/classe/Passager.php');
require_once(__DIR__ . '/classe/Gare.php');


$trains = 
[
    Train::ajouterTrain(1, "Barcelone", "12h00", "A"),
    Train::ajouterTrain(2, "Madrid", "10h00", "B"),
    Train::ajouterTrain(3, "Paris", "14h30", "C")
];


$passagers = 
[
    Passager::ajouterPassager("Pedri", 101, 1),
    Passager::ajouterPassager("Gavi", 102, 1),
    Passager::ajouterPassager("Rodrigo", 103, 2)
];


echo ">>> LISTE DES TRAINS :\n";
foreach ($trains as $train) {
    Train::afficherTrain($train);
}

echo "\n>> LISTE DES PASSAGERS :\n";
foreach ($passagers as $passager) {
    Passager::afficherPassager($passager);
}

echo "\n>> INFORMATIONS DE LA GARE :\n";
foreach ($trains as $train) {
    Gare::afficherInfoTrain($train, $passagers);
}
