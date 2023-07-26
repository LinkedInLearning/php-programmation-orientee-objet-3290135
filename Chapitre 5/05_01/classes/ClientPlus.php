<?php
require 'Personne.php';

class ClientPlus extends Personne {

    private $id_client;

    private $email;

    public function __construct($nom, $prenom, $age, $email, $id)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setEmail($email);
        $this->setId($id);

    }


    public  function getId()
    {
        return $this->id_client;
    }

    public function setId($id)
    {
        $this->id_client = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function acheter()
    {
        return "j'achète";
    }

    public function manger()
    {
        return parent::manger().' au restaurant';
    }

}

$client = new ClientPlus('ndaw','laurent',35,'tester@gmail.com', 1);
$client->manger();