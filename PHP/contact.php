<?php
 // Récupération des champs
    if(isset($_POST['nomCL']))      $nom = isset($_POST["nomCL"]) ? $_POST["nomCL"] : "";
    else      $nom="";
    if(isset($_POST['prenomCL']))   $prenom = isset($_POST["prenomCL"]) ? $_POST["prenomCL"] : "";
    else      $prenom="";
    if(isset($_POST['emailCL']))    $email = isset($_POST["emailCL"]) ? $_POST["emailCL"] : "";
    else      $email="";
    if(isset($_POST['messageCL']))  $message = isset($_POST["messageCL"]) ? $_POST["messageCL"] : "";
    else      $message="";
    if(isset($_POST['sujetCL']))    $sujet = isset($_POST["sujetCL"]) ? $_POST["sujetCL"] : "";
    else      $sujet="";


    // Envoi du mail
    $destinataire = "admin@samanismail.fr";
    $contenu = '<html><head><title>Vous avez reçu un message</title></head><body>';
    $contenu .= '<p>Prénom: '. $prenom . ' <br> Nom: ' . $nom . ' <br> Email: ' . $email . ' <br> Sujet: ' . $sujet . ' <br> Message: ' . wordwrap($message, 50, "\n", true) .'</p>';
    $contenu .= '</body></html>';
    $headers = "From: $email\r \n";
    $headers .= "Reply-To: $email\r \n";
    $headers .= "Content-Type: text/html; charset=\"utf-8\"";

    if(mail($destinataire, $sujet, $contenu, $headers)) // Envoi du mail
    {
        echo "Votre message a bien été envoyé !";
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé...";
    }
?>



