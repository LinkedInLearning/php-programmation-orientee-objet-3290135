<?php

require_once 'config/connexion.php';

// on affiche une condition sur $_GET 
// on commence le traitement si une donnée en GET existe et n'est pas vide.
if(!empty($_GET))
{

    // création d'un requête préparée
    // cette requête vérifie si le client existe.

    $requete = $pdo->prepare('SELECT * FROM clients WHERE id_client = ?');
    $requete->execute([$_GET['id_client']]);
    $client = $requete->fetch();

    // si le client existe on le supprime
    // si le client n'existe pas, on affiche un message
    if(!empty($client)){

        $pdo->prepare('DELETE FROM clients WHERE id_client = ?')->execute([$_GET['id_client']]);
        echo 'le client a été supprimé';
    } else {
        echo "le client que vous voulez supprimer n'existe pas";
    }

}