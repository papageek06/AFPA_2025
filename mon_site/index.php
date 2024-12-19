<?php
require_once ("./header.php");


$computeur = rand( 0, 10);
$player =rand( 0, 10);
echo "$computeur";
$msg = "";


for ($count = 0 ;$count <3 ; $count++){ 
    
    if ($computeur === $player){
    $msg = "tu as gagner !!";
    $count =3;

} else {  
    $msg = "tu as perdu !!";
};

    echo "  <ul><li>choix de l'ordi est  $computeur</li><li>choix de l'ordi est .  $player</li><li>  echo $msg </li></ul>";
};








?>

<main>



<?php

require_once ("./footer.php");

?></main>