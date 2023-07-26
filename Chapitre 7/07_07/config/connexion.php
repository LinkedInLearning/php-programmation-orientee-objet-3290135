<?php

require_once 'globals.php';

$db_name = DB_NAME;
$db_host = DB_HOST;

$dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


var_dump($pdo);