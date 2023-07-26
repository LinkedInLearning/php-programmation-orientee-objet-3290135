<?php 

require 'classes/Personne.php';


class Employe extends Personne {

    public $id;

    public $metier;

    public $salaire;


    public function travailler()
    {
        return 'je travaille';
    }

    public function marcher()
    {
        return parent::marcher();
    }

}

$employe = new Employe();
echo $employe->marcher();
/*
echo '<pre>';
print_r($employe);
echo '</pre>';
*/