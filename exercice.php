<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire</title>
</head>

<body>
    <div class="contacter-nous">
        <h1> contacter -nous</h1>
        <p> N hesitez pas à utiliser ce formulaire pour nous contacter!</p>

        <div class="form">
            <form action="contact.php" method="get">

                <label for="nom">Quel est votre nom?</label>
                <input type="text" id="nom" name="nom">

                <label for="prenom">Quel est votre prenom?</label>
                <input type="text" id="prenom" name="prenom">

                <label for="e-mail"> votre e-mail</label>
                <input type="e-mail" id="e-mail" name="e-mail">

                <label for="telephone"> votre numero de telephone</label>
                <input type="text" id="telephone" name="telephone">

                <label for="adresse"> votre adresse postal</label>
                <input type="text" id="adresse" name="adresse">
        </div>
        <div class="btn">
            <button type="submit">envoyer le formulaire</button>
            <button type="reset">supprimer </button>
        </div>
    </div>

    </form>
</body>

</html>