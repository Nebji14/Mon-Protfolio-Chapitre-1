<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $email = trim($_POST["email"]);
    $telephone = trim($_POST["telephone"]);
    $message = trim($_POST["message"]);

    if (empty($nom) || empty($email) || empty($message)) {
        die("Tous les champs marqués * sont obligatoires.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("L'adresse email n'est pas valide.");
    }

    $to = "bendav@outlook.fr";
    $subject = "Nouveau message depuis votre formulaire de contact";

    $body = "Vous avez reçu un nouveau message :\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Prénom : $prenom\n";
    $body .= "Email : $email\n";
    $body .= "Téléphone : $telephone\n\n";
    $body .= "Message :\n$message\n";
    $body .= "\n---\nCe message a été envoyé depuis le formulaire de contact de votre site.\n";

    $from = "contact@davidbenjamindev.fr"; // Adresse de ton domaine

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'email.";
    }

} else {
    header("Location: contact.html");
    exit();
}

?>
