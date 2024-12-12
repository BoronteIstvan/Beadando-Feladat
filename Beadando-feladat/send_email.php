<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // E-mail címek
    $to = "boronte.isti03@gmail.com";  // Cél e-mail cím
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $username = $_POST['username'];

    // E-mail fejléc
    $headers = "From: " . $username . "\r\n";
    $headers .= "Reply-To: " . $username . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // E-mail küldése
    if (mail($to, $subject, $message, $headers)) {
        echo "Az üzenetet sikeresen elküldtük.";
    } else {
        echo "Hiba történt az üzenet küldésekor.";
    }
}
?>