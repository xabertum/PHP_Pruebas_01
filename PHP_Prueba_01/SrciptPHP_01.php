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
print "El precio con iva es ".$precio;


?>