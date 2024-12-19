<?php

for ($i=0 ; $i <5 ; $i++) {
    echo "boucle for n $i";
}

$names = ["thor ", "elliot" , "walid"];

for ( $i=0 ; $i< count(value: $names) ; $i++ ) {
    echo "hello " . $names[$i] . "<br>";
}

?>