<?php
function calculateTTC($amountHT , $tva) {

    $result = $amountHT * $tva;
    echo "TTC : $result";
    return $result;

}

calculateTTC(100,20);
echo "<br>";
calculateTTC(200,20);



?>