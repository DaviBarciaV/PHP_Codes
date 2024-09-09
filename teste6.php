<?php
    $valor = $_POST["valor"];

    switch($valor){
    /*    case 1:
            echo "O número é 1";
            break;
        case 3:
            echo "O número é 3";
            break;
        case 5:
            echo "O número é 5";
            break;
        default:
            echo "O número não é 1, 3 ou 5";*/

            case 1:
            case 3:
            case 5:
                echo "O número é 1, 3 ou 5";
                break;
            default:
                echo "O número não é 1, 3 ou 5";
    }

