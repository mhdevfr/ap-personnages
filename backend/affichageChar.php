<?php
$req = "SELECT idPerso, nomPerso, descPerso, imgperso, idCateg FROM personnage";
        $stmt = $connexion->query($req);
        $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>