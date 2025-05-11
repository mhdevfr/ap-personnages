<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include './linkbdd.php';

$email = $_POST['email'];
$password = $_POST['password'];
$requeteSql = "SELECT * FROM Users where email = ?";
$etat = $connexion->prepare($requeteSql);
$etat->execute([$email]);
$user = $etat->fetch();
if($user){
    $passwordChecked = password_verify($password, $user['password']);
    if($passwordChecked){
        echo $user['Notes'];
        $_SESSION['user'] = $user['ID'];
        header('Location: ./../index.php');
    } else {
        echo "Mots de passe incorrects";
    }
} else {
    echo "Compte non trouvé";
    echo "Si vous n'en avez pas aller sur",  " <a href='../index.php'>  Juste ici </a>";
}



?>