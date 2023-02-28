
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <section>
        <h1>nous contacter</h1>
        <h2>du lundi au vendredi</h2>
<?php
include("script.php");

?>
        <form action="" method="post">
            <input type="text" name="nom" placeholder="votre nom">
            <input type="email" name="mail" placeholder="votre mail">
            <textarea name="message" placeholder="entrer votre message"></textarea>
            <input type="submit" name="envoyer" value="envoyer votre message">

        </form>
    </section>
</body>
</html>