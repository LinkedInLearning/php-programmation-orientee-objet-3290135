<?php
require 'Personne.php';

class Client extends Personne {

    private $id_client;

    private $email;


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

$client = new Client();
$client->setNom('ndaw');
$client->setPrenom('Laurent');
$client->setAge(35);
$client->setId(1);
$client->setEmail('tester@gmail.com');
$client->manger();