<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Document sans titre</title>
	
</head>

<body>
	
	<?php
session_start();
	
if(isset($_POST['nom_utilisateur']) && isset($_POST['mot_de_passe']))
{
    // connexion à la base de données
    $db_username = 'nom_utilisateur';
    $db_password = 'mdp_utilisateur';
    $db_name     = 'lilt';
    $db_host     = 'localhost';
    $db = mysqli_connect('127.0.0.1','emma','Hipz9893','lilt')
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['nom_utilisateur'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot_de_passe']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mdp_utilisateur = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['nom_utilisateur'] = $username;
           header('Location: principale.php');
        }
        else
        {
         header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
      header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
  header('Location: connexion.php');
}
mysqli_close($db); // fermer la connexion
?>
	
	
	
	
	
	
</body>
</html>