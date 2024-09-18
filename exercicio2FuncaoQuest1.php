<?php
    // Teste de função
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    function qualoMaior($num1,$num2,$num3){
        if($num1 > $num2 && $num1 > $num3){
            echo "O número 1 é maior, e o número é $num1</br>";
        }
        elseif($num2 > $num1 && $num2 > $num3){
            echo "O número 2 é maior, e o número é $num2</br>";
        }
        else{
            echo "O número 3 é maior, e o número é $num3</br>";
        }
    }
    // Faz a chamada da função
    qualoMaior($num1,$num2,$num3);

    function qualoMenor($num1,$num2,$num3){
        if($num1 < $num2 && $num1 < $num3){
            echo "O número 1 é o menor, e o número é $num1</br>";
        }
        elseif($num2 < $num1 && $num2 < $num3){
            echo "O número 2 é o menor, e o número é $num2</br>";
        }
        else{
            echo "O número 3 é o menor, e o número é $num3</br>";
        }
    }
    qualoMenor($num1,$num2,$num3);
        