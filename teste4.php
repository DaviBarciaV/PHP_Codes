<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Parabéns! Você foi aprovado com média $media.";

}
elseif ($media >= 1 && $media < 7) {
    echo "Você está na final. Sua média foi $media.";
}
else {
    echo "Você foi reprovado. Sua média foi $media.";
}