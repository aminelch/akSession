<?php
require "src/akSession.php";

//On crée l'object via la méthode getInstance(); 
$session = akSession::getInstance(); 


// $session->set("user","amine");
// $session->set("id",uniqid());


// var_dump($session);


 echo "Bonjour ". $session->get("id");


echo "<pre> <br>";
print_r($_SESSION);
echo "</pre> <br>";
