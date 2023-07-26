<?php

require_once 'config/autoload.php';


$client = new Client();
echo $client->parler();


$personne = new Personne();
echo $personne->manger();

