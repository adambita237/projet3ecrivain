
<?php
//connexion à la base de donnée
require_once('connexion.php');

function findById(\PDO $bdd, int $id): array
{
    $query = $bdd->prepare('SELECT * FROM chapitre WHERE id=:id');
    $query->execute(['id'=>$id]);
    return $query->fetch();

    //On affiche chaque entrée une à une
   /* while ($donnees = $reponse->fetch())
    {
        echo $donnees['titrechapitre'].'<br />';
        echo $donnees['imageChapitre'].'  '. ['textechapitre'].'<br />';
        echo $donnees['datepublication'].'<br />';
        echo '<br />';
    }
    
    $reponse->closeCursor(); //Termine le traitement de la requête */
}

function findAll(\PDO $bdd): array
{
    $query = $bdd->prepare('SELECT * FROM chapitre');
    $query->execute();
    return $query->fetchAll();
    
    //On affiche chaque entrée une à une
   /* while ($donnees = $reponse->fetch())
    {
        echo $donnees['titrechapitre'].'<br />';
        echo $donnees['imageChapitre'].'  '. ['textechapitre'].'<br />';
        echo $donnees['datepublication'].'<br />';
        echo '<br />';
    }
    
    $reponse->closeCursor(); //Termine le traitement de la requête */
}
$commentaires = $bdd->query ('SELECT * FROM  commentaire ORDER BY id DESC');
    return $commentaires;

//Afficher un extrait du chapitre
function extraitChapitre(\PDO $bdd): array
{
    while ($donnees = $reponse->fetch())
    {
        echo $donnees['textechapitre'];
        $extrait= substr($donnee['textechapitre'], 0, 80);    // retourne "f"
        echo '<br />';
    }

}


