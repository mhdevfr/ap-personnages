<?php

$username = "arvvby_sarthena_db";
$servername = "185.207.226.14";
$password = "t_K9Xxz2rC-*0!1E";
$port = 3306;

try {
    $connexion = new PDO("mysql:host=$servername;port=$port;dbname=arvvby_sarthena_db", $username, $password);
}catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
}
session_start();
if(isset($_SESSION['user'])){
    $requeteSql = "SELECT * FROM Users WHERE ID = ?";
    $etat = $connexion->prepare($requeteSql);
    $etat->execute(([$_SESSION['user']]));
    $user = $etat->fetch();
}



?>