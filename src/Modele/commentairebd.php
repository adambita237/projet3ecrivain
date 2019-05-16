<?php
//connexion à la base de donnée
include('connexion.php');

//si tout va bien on continu le processus

//On récupère le contenu de la table commentaire
$reponse = $bdd->query('SELECT nom, messagecomm, datecommentaire, 
signaler FROM commentairesignale');

//On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'].'<br />';
    echo $donnees['messagecomm'].'<br />';
    echo $donnees['datecommentaire '].'  '. ['signaler '].'<br />';
    echo '<br />';
}

$reponse->closeCursor(); //Termine le traitement de la requête

?>

