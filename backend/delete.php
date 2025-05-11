<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
include './linkbdd.php';
$idPerso = $_GET['idPerso'];
$requete = "DELETE FROM personnage WHERE idPerso = ?";
$stmt = $connexion->prepare($requete);
$stmt->execute([$idPerso]);
header("Location: ../personnages.php");
exit(); 

?>