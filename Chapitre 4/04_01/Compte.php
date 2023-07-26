
Objectifs : autoriser un découvert de 200

class CompteBancaire {
    attributs :
       public numero_de_compte
       public  type_de_compte
       public  solde
       public  date_ouverture
}
    

$compte_de_laurent  = new CompteBancaire();
$compte_de_laurent->numero_de_compte = "A1";
$compte_de_laurent->type_de_compte = "courant";
$compte_de_laurent->solde = 300;


$compte_de_guy  = new CompteBancaire();
$compte_de_guy->numero_de_compte = "A2";
$compte_de_guy->type_de_compte = "epargne";
$compte_de_guy->solde = 500;

$compte_de_pascal  = new CompteBancaire();
$compte_de_pascal->numero_de_compte = "A3";
$compte_de_pascal->type_de_compte = "courant";
$compte_de_pascal->solde = 500;