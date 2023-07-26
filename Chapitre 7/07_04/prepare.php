<?php
require_once 'config/connexion.php';


$pdo->prepare('INSERT INTO clients (id_client, nom, prenom, email) VALUES (null, ?,?,?)')
->execute([$_GET['nom'], $_GET['prenom'], $_GET['email']]);