<?php

require 'classes/Client.php';


$client1 = new Client();
$client1->setNom('gerard');
$client1->setprenom('alain');
$client1->setAge(40);
$client1->setEmail('client1@gmail.com');
$client1->setid(2);

$client2 = $client1;

$client2->setPrenom('pascal');

$client3 = clone($client1 );
$client3->setNom('henri');

echo '<pre>';
print_r($client1);
print_r($client2);
print_r($client3);
echo '</pre>';