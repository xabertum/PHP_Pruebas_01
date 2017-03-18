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