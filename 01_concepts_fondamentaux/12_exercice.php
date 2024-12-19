<?php

// construire un tableau de 10 lignes 
// avec 5 cellules par ligne en php
// chaque ligne devra afficher un chiffre dont la valeur 
// incrementera dans chaque cellule
$count =0 ;


echo "<table border=1>";

for ( $i=0 ; $i <10 ; $i++) {

    echo "<tr>";

    for ($td = 0 ; $td <=5 ; $td++) {
        echo "<td>$td</td>";
    };

    echo"</tr>";


}

echo "</table>";





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">

        <tbody>
            <?php 
                for ($i=0; $i < 10; $i++) { ?> 
                    <tr>
                        <?php for ($j=0; $j < 5; $j++) { ?>
                            <td><?= $count; ?></td>
                            <?php $count++;
                        }?>
                    </tr>
                <?php }
            ?>
        </tbody>

    </table>
    
</body>
</html>


