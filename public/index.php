<?php
require_once ('../src/Modele/chapitrebd.php');
require_once '../vendor/autoload.php';
$chapitres= findAll($bdd);
/* var_dump($chapitres);
die(); */

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('home.html.twig',['chapitres'=>$chapitres]);

?>