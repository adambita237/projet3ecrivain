
<?php
//connexion à la base de donnée
include('connexion.php');

//si tout va bien on continu le processus

//On récupère le contenu de la table chapitre
$reponse = $bdd->query('SELECT * FROM chapitre');

//On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    echo $donnees['titrechapitre'].'<br />';
    echo $donnees['imageChapitre'].'  '. ['textechapitre'].'<br />';
    echo $donnees['datepublication'].'<br />';
    echo '<br />';
}

$reponse->closeCursor(); //Termine le traitement de la requête

?>

