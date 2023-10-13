<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nome"];
    $email = $_POST["email"];
    
    $to = "tua-email@example.com";
    $subject = "Nuovo messaggio dal modulo di contatto";
    $message = "Nome: $name\nEmail: $email";

    mail($to, $subject, $message);
}
header("Location: conferma.html"); // Reindirizza a una pagina di conferma
?>
