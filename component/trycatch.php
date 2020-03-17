<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=minchattp;charset=utf8','root','');
}
catch (PDOException $e){
    die('erreur:'.$e);
}