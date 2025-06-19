<?php

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupère les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];

    // Valide les données
    if (empty($nom) || empty($email) || empty($message)) {
        die("Tous ces champs sont obligatoires.");
    }

    // Nettoie les données
    $nom = ($nom);
    $prenom = ($prenom);
    $email = ($email);
    $tel = ($tel);
    $message = ($message);



    // Envoi d'email
    $to = "contact@davidbenjamindev.fr";
    $subject = "Nouveau Message de $prenom $nom";
    $body = "Vous avez reçu un nouveau message depuis le site davidbenjamindev.fr.\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Email : $email\n";
    $body .= "Téléphone : $tel\n\n";
    $body .= "Message :\n$message";
    
    $headers = "From: contact@davidbenjamindev.fr\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location:contact.php?msg=Message envoyé");
    } else {
        header("Location:contact.php?msg=Echec lors de l'envoi du message");
    }

} else {
    // Redirection si le formulaire n'a pas été soumis
    header("Location:contact.php?msg=Méthode non autorisée");
    exit;
}
?>
