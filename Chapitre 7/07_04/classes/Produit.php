<?php

class Produit {

    public $id_produit;

    public $nom;

    public $prixHt;

    const TVA = 20;

    public function afficherPrixTTC()
    {
        return $this->prixHt +( $this->prixHt * self::TVA / 100);
    }

    public static function afficherTVA()
    {
        return "La TVA est ".self::TVA." %";
    }

}

$produit = new Produit();
$produit->id_produit = 1;
$produit->nom = "ballon";
$produit->prixHt = 19.90;
echo $produit->afficherPrixTTC();
echo Produit::afficherTVA();