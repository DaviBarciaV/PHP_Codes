<?php    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    function soma($num1, $num2, $num3) {
        return $num1 + $num2 + $num3;
    }
    $soma = soma($num1, $num2, $num3);
    echo "A soma dos números é: $soma";



?>

<?php
    function media ($soma){
        return $soma;
    }
    $media = $soma / 3;
    echo "<br>A média dos números é: $media";
?>  


