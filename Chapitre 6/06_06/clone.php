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


//on vérifie si les deux objets sortent de la même classe
if($client1 == $client2)
{
    echo '$client1 et $client2 sortent de la même classe</br>';
}

// on verifie si les deux objets pointent vers le même objet
if($client1 === $client3)
{
    echo '$client1 et $client3 pointent vers le même objet</br>';
}else {
    echo '$client1 et $client3 viennent de deux objets différents</br>';
}



// on verifie si l'objet est une instance d'une classe avec instanceof
if($client1 instanceof Client)
{
    echo '$client1 est une instance de la classe Client</br>';
}
