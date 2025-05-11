<?php

include './backend/linkbdd.php';
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if (empty($nom) || empty($email) || empty($message)) {
        echo "<p>Tous les champs sont requis.</p>";
    } else {
        $to = "votre_email@example.com";
        $sujet = "Nouveau message de contact";
        $corps_message = "Nom: $nom\n";
        $corps_message .= "Email: $email\n";
        $corps_message .= "Message:\n$message\n";
        $headers = "From: $email";

        if (mail($to, $sujet, $corps_message, $headers)) {
            echo "<p>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>";
        } else {
            echo "<p>Désolé, une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.</p>";
        }
    }
?>