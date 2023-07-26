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

}

$employe = new Employe();

echo '<pre>';
print_r($employe);
echo '</pre>';