<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


echo "My first PHP script!";

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>$txt1</h2>";
echo "Study PHP at $txt2<br>";
echo $x + $y;

echo "<h2>";

echo str_word_count('Hola esto es un prueba maliciosa');

echo "</h2>";

function precio_con_iva(&$precio, $iva = 0.18) {

    $precio *= (1 + $iva);
}

$precio = 10;
precio_con_iva($precio);
print "El precio con iva es " . $precio;

echo "<br>";
echo "<br>";

$modulos = array("PR" => "programación", "BD" => "Base de datos");
$modulos ["RC"] = "Radio Control";


foreach ($modulos as $i => $i_value) {

    echo "Posición: " . $i . ", valor: " . $i_value;
    echo "<br>";
}

$modulos_value [] = str_word_count("Esto es una prueba");

while ($modulos = each($modulos_value)) {

    print $modulos[1] . " es " . $modulos_value[0] . "<br/>";
}

echo "<br>";
echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    print "el noombre recogido es: " . $firstName;
    echo "<br>";
    print "el apellido recogido es: " . $lastName;
}
echo "<br>";
echo "<br>";
?>