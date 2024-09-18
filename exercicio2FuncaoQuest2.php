<?php
    $num1 = $_POST["num1"];

    function NouP($num1){
        if ($num1 > 0){
            return "p"; // retorna o valor de num1

        }
        else{
            return "n";
        }
    }
    $resultado = NouP($num1); // declara que o resultado é o uso da função sobre a variável num1
    echo "$resultado";