<?php
require_once ('../Modele/commentairebd.php');
require '../../vendor/autoload.php';
$commentaires = findAllComment($bdd);
/*var_dump($commentaire);
die();*/

$loader = new \Twig\Loader\FilesystemLoader('../../views');
$twig = new \Twig\Environment($loader, [
'cache' => false, // __DIR__ .'/var'
]);

echo $twig->render('chapitre.html.twig', ['commentaires'=>$commentaires]);

?>