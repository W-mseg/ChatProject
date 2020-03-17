<?php include('./minichat.php') ?>
<br>
<form action="./fonction.php" method="post">
    <input type="text" placeholder="Pseudo" name="pseudo">
    <br><br>
    <textarea name="text" id="textarea" cols="69" rows="5" placeholder="Message"></textarea>
    <br>
    <button type="submit">Envoyer</button>
</form>
