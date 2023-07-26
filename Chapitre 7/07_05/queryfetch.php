<?php

require_once 'config/connexion.php';


$requete = $pdo->query('SELECT * FROM clients WHERE id_client = 1');
$resultat = $requete->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($resultat);
echo '</pre>';