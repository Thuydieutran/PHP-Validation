<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname']; 
    $sujet = $_POST['sujet']; 
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];
    
    $data = array_map('trim', $_POST);

    $errors = [];
    $firstnameLength = 4;
    $lastnameLength = 4;
    $messageLength = 500;
    if (empty($data['firstname'])) {
        echo 'Le prénom est obligatoire';
     
    }

    
    if (strlen($data['firstname']) < $firstnameLength) {
        echo  'Le prénom doit faire au moins de ' . $firstnameLength . ' caractères';
       
    }

    if (empty($data['lastname'])) {
        echo 'Le nom est obligatoire';
       
    }

   
    if (strlen($data['lastname']) < $lastnameLength) {
       echo $errors[] = 'Le nom doit faire au moins de ' . $lastnameLength . '  caractères';
        
    }

    if (empty($data['phone'])) {
        $errors[] = 'Le numéro de téléphone est obligatoire';
    }

    
    if (empty($data['email'])) {
        echo 'L\'email est obligatoire';
        
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Mauvais format d\'email';
        
    }
    
    if (empty($data['message'])) {
        echo 'Votre message est obligatoire';
        
    }

   
    if (strlen($data['message']) > $messageLength) {
        echo'Le message doit faire moins de ' . $messageLength . '  caractères';
        
    }
    
    if (empty($errors)) {
        echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $sujet . ' . ' . ' Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au dans les plus brefs délais pour traiter votre demande :' . $message;    
    }
}


