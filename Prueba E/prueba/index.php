<?php
require 'models/arbol.php';
require 'models/flor.php';
require 'models/arbusto.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php 
     
    echo "<h1>PLANTAS</h1>";

echo "<h2>ÁRBOL</h2>";
$Arbol->Saludar();
$Arbol->MostrarInformacion();


echo "<hr>";

echo "<h2>FLOR</h2>";
$Flor->Saludar();
$Flor->MostrarInformacion();

echo "<hr>";

echo "<h2>ARBUSTO</h2>";
$Arbusto->Saludar();
$Arbusto->MostrarInformacion();

?>
</body>
</html>












