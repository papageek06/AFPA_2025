<?php 

 $a=10; 
 $b =5;
 
 echo $a <= $b && $a > 3 ;
    // true && true => true
    // true && false => false
    // false && true => false
    // false && false => false

    $nationnality ="spanish" ;
    echo $nationnality == "english"  || $nationnality == "spanish";

    //XOR

    echo $nationnality == "mexican" xor $nationnality == "spanish"; // true seulement si 1 des deux est true : 2 true is false


?>