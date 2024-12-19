<?php

$nationnality = "ukranian";

if($nationnality == "ukranian" && $nationnality != "morrocan") {
    echo "priviet";
} else if ($nationnality =="spanish") {
    echo "hola";
} else {
    echo "hello";
};

// condition ternaire

$language =($nationnality=="ukrnian") ? "ukranian" : "english" ;
echo ($nationnality == "ukranian") ?  "ukranian" : "english" ;


$color = "yellow" ;

switch ($color) {
    case 'blue':
        echo "your favorite color is blue";
        break;
            case 'red':
        echo "your favorite color is red";
        break;
            default: 
        echo "i dont know";
        break;
    

}

?>