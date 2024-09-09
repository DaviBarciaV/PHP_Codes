<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 10;
$b = 10;
// == igual
// === igual e do mesmo tipo (identico)
// != diferente
// <> diferente
// !== não identico
// > maior
// < menor
// >= maior ou igual
// <= menor ou igual
if ($a < $b){
    echo "A é menor que B";
}
elseif ($a === $b){
    echo "A é idêntico a B";
}
else {
    echo "A não é menor que B";
}
?>
</body>
</html>