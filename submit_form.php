<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "leonid.domagalsky@gmail.com"; // Hier deine E-Mail-Adresse eintragen
    $subject = "Contact form: New message from $name";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        // E-Mail wurde erfolgreich gesendet
        echo "<script>
            alert('Thank you! Your message has been sent successfully.');
            window.location.href = 'index.html';
        </script>";
    } else {
        // Fehler beim Senden der E-Mail
        echo "<script>
            alert('There was a problem sending the email. Please try again later.');
            window.location.href = 'index.html';
        </script>";
    }
} else {
    // Fallback, falls das Formular direkt aufgerufen wird
    header("Location: index.html");
}
?>