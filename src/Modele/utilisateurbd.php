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

//Affiche tous les utilisateurs
function AllUsers()
{
    $users = array();
    
    $reponse = $this->$bdd->query('SELECT * FROM utilisateur');
    while ($donnees =$reponse->fetch(PDO::FETCH_ASSOC))
    {
        $users[] = new User($donnees);
    }
    return $users;
}
    
//affiche un utilisateur
function getUserById($getIdUser)
{
    $getIdUser = (int) $getIdUser;
    
    $reponse = $this->$bdd->prepare('SELECT * FROM utilisateur WHERE idUtilisateur=?');
    $reponse->execute(array($getIdUser));
    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
    return new User($donnees);
}
    
//Ajoute un utilisateur
function addUser(User $user)
{
    $reponse = $this->$bdd->prepare('INSERT INTO utilisateur ( nomUtilisateur, motPass) VALUES(:nomUtilisateur, :motPass)');
   $reponse->bindValue(':nomUtilisateur', $user->getName(), PDO::PARAM_STR);
   $reponse->bindValue(':motPass', $user->getPassword(), PDO::PARAM_STR);
   $reponse->execute();
            
    $user->hydrate(['idUtilisateur' => $this->$bdd->lastInsertId()]);
}

//modifier le mot de pass d'un utilisateur        
function updatePwd($nom, $pwd)
{
    $reponse = $this->$bdd->prepare('UPDATE utilisateur SET motPass = :motPass WHERE nomUtilisateur=:nomUtilisateur');
    $reponse->bindValue(':password', sha1($pwd), PDO::PARAM_INT);
    $reponse->bindValue(':nomUtilisateur', $nom, PDO::PARAM_INT);
    $reponse->execute();
}

