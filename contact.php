<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$email = $_GET['e-mail'];
$telephone = $_GET['telephone'];
$adresse = $_GET['adresse'];


if(($_GET['nom'] =="")||($_GET['prenom']=="")||($_GET['e-mail']=="")||($_GET['telephone']=="")||($_GET['adresse']=="")){
    echo "remplir le formulaire";
}


?>
<body>
    <table> 
        <tr>
            <td>nom</td>
            <td>prenom</td>
            <td>e-mail</td>
            <td>numero de telephone</td>
            <td>adresse</td>
        </tr>
        <tr>
            <td><?php echo $nom; ?></td>
            <td><?php echo $prenom; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $tlephone; ?></td>
            <td><?php echo $adresse; ?></td>
        </tr>
    </table>
</body>
</html>






