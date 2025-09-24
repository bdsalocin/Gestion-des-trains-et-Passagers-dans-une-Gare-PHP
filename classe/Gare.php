<?php
class Gare {
    public static function afficherInfoTrain(Train $train, array $passagers) {
        echo    "=== Train n°" 
                . $train->idTrain
                . " | Destination : " 
                . $train->destination
                . " | Départ : " 
                . $train->heureDepart
                . " | Plateforme : " 
                . $train->plateforme 
                . " ===\n";

        $passagersAssigne = false;
        
        foreach ($passagers as $passager) {
            if ($passager->idTrain === $train->idTrain) {
                echo    " - Passager : " 
                        . $passager->passager
                        . "\n";

                $passagersAssigne = true;
            }
        }

        if (!$passagersAssigne) {
            echo " Aucun passager assigné.\n";
        }
    }
}

