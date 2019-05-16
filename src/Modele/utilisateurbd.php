<?php
//connexion à la base de donnée
include('connexion.php');

//si tout va bien on continu le processus

//On récupère le contenu de la table utilisateur
$reponse = $bdd->query('SELECT * FROM utilisateur');

//On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    echo $donnees['idUtilisateur'].'--'.['nomUtilisateur'].'--'. ['motPass'].'<br />';
    echo '<br />';
}

$reponse->closeCursor(); //Termine le traitement de la requête

?>

