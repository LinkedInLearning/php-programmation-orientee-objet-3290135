<?php

class Calculatrice {

    private $marque;

    private $type;

    private $niveau_scolaire;


    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getnScolaire()
    {
        return $this->niveau_scolaire;
    }

    public function setnScolaire($niveau)
    {
        $this->niveau_scolaire = $niveau;
    }

    public function additionner($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function soustraire($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiplier($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function diviser($num1, $num2)
    {
        return $num1 / $num2;
    }

}

$calculatrice = new Calculatrice();
$calculatrice->setMarque('casio');
$calculatrice->setType('scientifique');
$calculatrice->setnScolaire('Lycee');

echo $calcualtrice->getMarque();
echo $calculatrice->getType();
echo $calculatrice->getnScolaire();


echo $calculatrice->additionner(11, 15);
echo $calcualtrice->soustraire(10,2);
