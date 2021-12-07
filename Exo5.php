<?php

function capital($arg){
    $choix=$arg;
    switch($choix){
        case "FRANCE":
            $capitale="PARIS";
            break;
        case "ALLEMAGNE":
            $capitale="BERLIN";
            break;
        case "ESPAGNE":
            $capitale="MADRID";
            break;
        case "ANGLETERRE":
            $capitale="LONDRES";
            break;
         case "SENEGAL":
            $capitale="DAKAR";
            break;
        case "PORTUGAL":
            $capitale="LISBONNE";
                break;
        default:
        echo "ERREUR 404";
    }
    echo "$choix==> $capitale";
}
echo capital("ANGLETERRE");