<?php

$prix = (empty($_GET['prix']) ? 100 : $_GET['prix']);


if($prix <= 50){
    throw new Exception('Le prix doit être supérieur à 50 euros ') ;
}

if($prix > 50 && $prix <= 100)
{
    throw new Exception('le prix doit être supérieur à 100 euros');
}