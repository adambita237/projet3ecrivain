<?php
$dns = 'mysql:host=localhost;dbname=bdprojet3;port=3306;charset=utf8';
$bdd = new PDO ($dns,'root','');
try
{
    // connextion  à la base de donnée
    $bdd = new PDO ($dns, 'root','');
}

catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête le processus
    die('Erreur : ' . $e->getMessage());
}
?>

