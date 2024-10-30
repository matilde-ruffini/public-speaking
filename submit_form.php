<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "giulia.pessina@itsrizzoli.it";
    $subject = "Nuova Richiesta";
    
    // Sanifica e raccoglie i dati inviati
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $messaggio = htmlspecialchars($_POST["messaggio"]);
    
    $body = "Nome: $nome\nEmail: $email\nTelefono: $telefono\nMessaggio: $messaggio";
    $headers = "From: webmaster@tuosito.it";

    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo.";
    } else {
        echo "Errore durante l'invio del messaggio.";
    }
}
?>
