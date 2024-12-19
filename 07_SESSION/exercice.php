<?php

$msg ="";
$endSession ="";
$name ="";
$form ="";
 session_start();

 if (isset($_GET["action"])&& $_GET["action"] == ["deconnection"] ){
    session_unset();
 }

if ($_POST){
    echo "<pres>";
    var_dump($_POST);
    echo"</pres>";
   
    $_SESSION["pseudo"] = $_POST["pseudo"];// l'alimenter
    echo $_SESSION["pseudo"];
    $msg = "<p>Je me déconnecte</p>";
    $endSession =" <a href='?action=deconnexion'>Se déconnecter</a>";
    $name= $_SESSION["pseudo"];
    
    

} else {


    $msg = " <p>Je me connecte</p>";
    $form = '   
         <form action="" method="post">
        <label for="pseudo">Votre pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" />
        <br>
        <br>
        <label for="pwd">Votre mot de passe</label>
        <input type="password" id="pwd" name="pwd" placeholder="Votre mot de passe" />
        <br>
        <br>
        <input type="submit" value="se connecter" />
    </form>'
;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   
    <?php echo $msg ?>

    <h3>Bienvenue <?php echo $name?></h3>
   <?php echo $endSession  ?>
   <?php echo $form?>


</body>

</html>