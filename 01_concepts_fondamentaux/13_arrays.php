<?php

$feeling = array('SAD', 'happy' , 'angry');
$name = [['sam' , 'paul'], ['habbani', 'lena']];
$list = ['text' , 12 , true];

echo $feeling[2]; //angry
echo $name[1][0]; //habbani

// fonction predefinie php
array_push($feeling, 'slick');
echo count($feeling);

echo '<pre>' ;
var_dump($feeling);
echo'</pre>';

for ($i=0; $i < count($feeling); $i++) {
echo $feeling[$i];
}



?>