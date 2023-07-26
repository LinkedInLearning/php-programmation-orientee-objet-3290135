<?php

class Calculatrice {

    public $marque;

    public $type;

    public $niveau_scolaire;


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
$calculatrice->marque = 'casio';
$calculatrice->type = 'scientifique';
$calculatrice->niveau_scolaire = 'Lycee';
echo $calculatrice->additionner(11, 15);
echo $calcualtrice->soustraire(10,2);
