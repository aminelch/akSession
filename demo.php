<?php
require "src/akSession.php";

//On crée l'object via la méthode getInstance(); 
$session = akSession::init();


// $session->set("user","amine");
// $session->set("id",uniqid());


// var_dump($session);

echo $session->getStatus();
die();
 //echo "Bonjour ". $session->get("id");


echo "<pre> <br>";
print_r($_SESSION);
echo "</pre> <br>";
