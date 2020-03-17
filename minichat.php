<div id="chat">
    <?php
    require('./component/trycatch.php');
    $sql = $bdd->query("SELECT *  FROM messages ORDER BY ID DESC LIMIT 15");
        while ($row = $sql->fetch()){
        echo '<p>'.$row['owner'].' : '.$row['message'].'</p>';
        }
    ?>
</div>