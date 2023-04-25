<?php
/*
Template Name: Affiche commande
*/
get_header();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $compteurfraise = $_POST["compteur-fraise"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $cp = $_POST["cp"];
    $ville = $_POST["ville"];
}

    // Vérification des données reçues
    if (empty($compteurfraise) || empty($nom) || empty($prenom) || empty($email) || empty($adresse) || empty($cp) || empty($ville)) {
        echo "Commande vide... !";
} else {
    echo '<main id="content" class="page affichecommande">';
    echo '<div class="page-content">';
    echo "<h1>Merci pour votre commande :)</h1>";
    echo "<h4>Merci $prenom $nom,<br />";
    echo "votre commande de <b>$compteurfraise article(s)</b> a bien été enregistrée et sera livrée à l'adresse suivante : <br />";
    echo "Adresse de livraison : $adresse, $cp $ville. <br /><b>@</b> Un email de confirmation vous a été envoyé à l'adresse $email.</h4>";
    echo "<br /><br /><a href='http://localhost/OPCR%20XAMP/projet6/planty4/'>Retouner à l'accueil</a>";
    echo '</div></main>';
    }


get_footer();



        /* // Envoi d'un e-mail de confirmation
        $to = $email;
        $subject = "Confirmation de votre commande";
        $message = "Bonjour $prenom $nom,\n\nNous avons bien enregistré votre commande de $compteur article(s) et elle sera livrée à l'adresse suivante : $adresse, $cp $ville.\n\nMerci de votre confiance !\nL'équipe de notre site";
        $headers = "From: noreply@monsite.com" . "\r\n" .
                   "Reply-To: noreply@monsite.com" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo "Merci $prenom $nom, votre commande de $compteur article(s) a été enregistrée et sera livrée à l'adresse suivante : $adresse, $cp $ville. Un e-mail de confirmation vous a été envoyé à l'adresse $email.";
        } else {
            echo "Une erreur est survenue lors de l'envoi de l'e-mail de confirmation.";
        } */


?>