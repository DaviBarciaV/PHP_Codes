
<?php
                    /* QUESTAO 2*/
    $numeros = [1,2,3,-1,-2,-3,4,5,6,-8];

    $positivos = 0;
    $negativos = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero){
        // par ou impar
        if ($numero % 2 == 0){
            echo "$numero é par <br>";
            $paridade = "par";
            $pares++;
        }
        else {
            echo "$numero é impar <br>";
            $paridade = "impar";
            $impares++;

        } // negativo ou positivo
        if ($numero >= 0){
            echo "$numero é positivo <br>";
            $sinal = "positivo";
            $positivos++;
        }
        else {
            echo "$numero é negativo <br>";
            $sinal = "negativo";
            $negativos++;
        }
    }

    echo "<br>Quantidade de números positivos: $positivos <br>";
    echo "Quantidade de números negativos: $negativos <br>";
    echo "Quantidade de números pares: $pares <br>";
    echo "Quantidade de números ímpares: $impares <br>";
?>

<?php

