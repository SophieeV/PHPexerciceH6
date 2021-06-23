<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice H6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Formulaire</h1>
    <form method="post" action="index2.php">
        <label for="identifiant">identifiant</label>
             <input type="text" id="identifiant" name="identifiant" placeholder="identifiant" required></br>
        <label for="password">mot de passe</label>
            <input type="password" id="password" name="password"placeholder="mot de passe" required></br>
      <button type="submit">envoyer</button>
    </form>
    <?php
$identifiant="identifiant";
setcookie($identifiant,time()+3600,"/");
$password="password";
setcookie($password,time()+3600,"/");
?>
</body>
</html>