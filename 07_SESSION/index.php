<?php

session_start();// demarre ou la recupere si elle existe


$_SESSION["name"] = "habbani";// l'alimenter
$_SESSION["first_name"] = "samih";

echo '<pre>';
var_dump ($_SESSION);
echo'</pre>';

unset($_SESSION["name"]); // ca enleve que le nom dans la session
session_unset();// la vider

echo '<pre>';
var_dump ($_SESSION);
echo'</pre>';

?>