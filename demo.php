<?php
require "src/akSession.php";
$session = akSession::getInstance();

print_r($session);

$session->set('h','am');
print_r($session);