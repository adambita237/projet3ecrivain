<?php
//connexion à la base de donnée
include('connexion.php');

//si tout va bien on continu le processus
function findAllComment(\PDO $bdd): array
{
    $query = $bdd->prepare('SELECT * FROM commentaire');
    $query->execute();
    return $query->fetchAll();
}
/*
//On récupère le contenu de la table commentaire
$reponse = $bdd->query('SELECT nom, messagecomm, datecommentaire, 
signaler FROM commentaire');

//On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    echo $donnees['nom'].'<br />';
    echo $donnees['messagecomm'].'<br />';
    echo $donnees['datecommentaire '];
    echo '<br />';
}

$reponse->closeCursor(); //Termine le traitement de la requête

function afficherCommentaire()
{
    $commentaires = $bdd->query ('SELECT * FROM commentaire ORDER BY id DESC');
    return $commentaires;
}*/