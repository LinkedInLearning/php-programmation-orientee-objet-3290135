<?php
require_once 'config/connexion.php';


$requete = $pdo->query("SELECT * FROM clients");
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($resultat);
echo '</pre>';