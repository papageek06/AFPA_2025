<?php

$error ="";

// si j'ai un formulaire soumis en methode post
if($_POST){

    $email = $_POST["email"];
    $password = $_POST["password"];

    //verifications
    if(empty($email)){
        $error ="<p style='color:red'> Attention, l'email ne peut pas etre vide</p>";
    }

    if(empty($password)) {
        $error ="<p style='color:red'> Attention, password ne peut pas etre vide</p>";
    }

    if(empty($error)) {
        if(strpos($email, ".com") != false) {
            $file = fopen("user.txt", "a");
            fwrite($file,$email." - ");
            fwrite($file,$password." \n ");
            fclose($file);
        } else {
            $error .="<p style='color:red'> Attention, l'email doit etre international</p>";
        }
    }

};


$email= isset($_POST["email"]) ? $_POST["email"] : "";
$password= isset($_POST["password"]) ? $_POST["password"] : "";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <p>Les erreurs : <?= $error; ?> </p> 

    <form method="POST">

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Enter email" id="email" value="<?php $email?>" />

        <br>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Enter password" id="password"  value="<?php $password?>"/>

        <br>
        <br>

        <input type="submit" value="Insert" />
    </form>

</body>
</html>

