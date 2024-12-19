<?php 


$colors = ['yellow', 'blue', 'red'];

echo implode ("-", $colors);
echo "<br>" ;

echo date('d/m/y');
echo "<br>" ;

$email = "contact@mail.com";
echo strpos($email,"@"); // position d'un caractere
echo "<br>" ;

$text = "hello world";
echo substr($text,0,3)."...";// donne les 3 premier caractere


?>