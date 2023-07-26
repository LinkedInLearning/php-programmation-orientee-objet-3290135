<?php

class Personne {
    //l'intérieur de la classe

    // création des attributs de l'objet
    private $nom;

    private $prenom;

    private $age;

    const BRAS = 2;
    public static $jambes = 2;


    // création des methodes 
    // ce sont les actions que peut faire l'objet.

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function presenter()
    {
        return $this->prenom.' '.$this->nom;
    }

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
      //l'intérieur de la classe
}
// l'extérieur de la classe

$personne = new Personne();
$personne->setNom('ndaw');
$personne->setPrenom('laurent');
$personne->setAge(35);

echo $personne->getAge();
echo $personne->getPrenom();
echo $personne->getNom();
echo $personne->presenter();

echo Personne::BRAS;
Personne::$jambes = 4;

echo Personne::$jambes;











