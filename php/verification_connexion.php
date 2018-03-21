<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Document sans titre</title>
	
</head>

<body>
	
	<?php

	
	include('connexionBdd.php');
	

	$hashpass=$_POST['mot_de_passe'] . $salt;	
	$hashpass=sha1($hashpass);
	$salt = "oeiez2201";
	$name = $_POST['nom_utilisateur'];

 	$query='SELECT * FROM utilisateur WHERE nom_utilisateur =\''.$name.'\' AND mdp_utilisateur=\''.$hashpass.'\'';
	
	echo $query;
//Je choisis le champ login
$reponse_login = $connexion->query($query); // Je choisis de la base de donné login le champ login
 
<<<<<<< HEAD


=======
>>>>>>> ee827ba25fbc86c3d23d4de0884b6a886fe847b6
							 
							 
while ($donnees = $reponse_login->fetch())

{
   if($donnees !== false){
	   
	   $idUtilisateur=$_POST['idUtilisateur'];
	   
	   	session_start();
	    $_SESSION['idUtilisateur']=$idUtilisateur;
        header("location: ../index_home.php");
	   
	   	
   }else{
    
echo"Votre email et/ou votre mot de passe sont incorrects";}}
	
$reponse_login->closeCursor(); 
	
	
	
	
	
?>
	
	
	
	
	
	
</body>
</html>