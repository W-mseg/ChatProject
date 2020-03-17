<!doctype html>
<html lang="fr">
<head>
<?php require('./component/head.php')?>
</head>
<body>
<?php require('./minichat.php') ?>
<form action="./fonction.php" method="post" class="chatform">
    <input type="text" placeholder="Pseudo" name="pseudo">
    <br><br>
    <textarea name="text" id="textarea" cols="69" rows="5" placeholder="Message"></textarea>
    <br>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>