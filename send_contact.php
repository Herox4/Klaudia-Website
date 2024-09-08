<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten abrufen
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-Mail-Adresse des Empfängers
    $to = "dennis.thomiczny@gmx.net";
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email";

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo "Ihre Nachricht wurde gesendet.";
    } else {
        echo "Es gab ein Problem beim Senden Ihrer Nachricht.";
    }
}
?>
