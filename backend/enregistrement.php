<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include './linkbdd.php';

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passconf'];

$requete = "INSERT INTO Users (email, password) VALUES (?, ?)";
$etat = $connexion->prepare($requete);

if ($password !== $passwordConf) {
    echo "Les mots de passe ne sont pas identiques veuillez recommencer";
} else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if ($etat->execute([$email, $hash])) {
        header('Location: ../index.php');
        exit(); 
    } else {
        $errorInfo = $etat->errorInfo();
        echo "Erreur: " . $errorInfo[2];
    }
} 
?>
