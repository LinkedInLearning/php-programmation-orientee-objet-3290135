<?php

class Personne {

    // création des attributs de l'objet
    public $nom;

    public $prenom;

    public $age;

    // création des methodes 
    // ce sont les actions que peut faire l'objet.

    public function parler()
    {
        return 'je parle';
    }

    public function manger()
    {
        return 'je mange';
    }

    public function marcher()
    {
        return 'je marche';
    }
}

$personne = new Personne();
$personne->nom = 'ndaw';
$personne->prenom = 'laurent';
$personne->age = 35;
echo $personne->parler();

var_dump($personne);






