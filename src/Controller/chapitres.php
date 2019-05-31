<?php
require_once ('../Modele/chapitrebd.php');
require_once ('../Modele/commentairebd.php');
require '../../vendor/autoload.php';
$chapitres= findAll($bdd);
/* var_dump($chapitres);
die(); */

$commentaires = findAllComment($bdd);
/*var_dump($commentaires);
die();*/

$loader = new \Twig\Loader\FilesystemLoader('../../views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('chapitres.html.twig',['chapitres'=>$chapitres,'commentaires'=>$commentaires]);