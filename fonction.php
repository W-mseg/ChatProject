<?php
try {
$bdd = new PDO('mysql:host=localhost;dbname=minchattp;charset=utf8','root','');
}
catch (PDOException $e){
    die('erreur:'.$e);
}

if(isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
}else{
    $_POST['pseudo']=null;
}
if(isset($_POST['text'])){
    $text = $_POST['text'];
}else{
    $_POST['text']=null;
}

$reps = $bdd->query("INSERT INTO messages (`message`,`owner`) VALUES('$text','$pseudo')");

header('location:chat.php');

