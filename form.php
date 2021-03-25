<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CONTACT FORM</h1>

    <form action="thanks.php" method="post">
   
        <label for="sujet">Choisissez un sujet</label>
        <SELECT name="sujet" size="1">
            <OPTION>Annuler la command
            <OPTION>Changer la date de livraison
            <OPTION>Modifier l'address de livraison
            <OPTION>Demande un remboursement
        </SELECT>
        <br><br>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="firstname" required>
        <br><br>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="lastname" required>
        <br><br>
        <label for="phone">Veuillez saisir votre numéro de téléphone:</label>
        <input type="tel" id="phone" name="phone" placeholder="00 11 22 33 44" required
           pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
        <br><br>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="email" required>
        <br><br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <br><br>

        <button type="submit">Envoyez votre message</button>

    </form>
</body>

</html>