<?php
    // Teste de função
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    function qualoMaior($num1,$num2){
        if($num1 > $num2){
            echo "O número 1 é maior, e o número é $num1";
        }
        elseif($num1 < $num2){
            echo "O número 2 é maior, e o número é $num2";
        }
        else{
            echo "Os números são iguais";
        }
    }