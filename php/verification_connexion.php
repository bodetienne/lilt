<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Document sans titre</title>

</head>

<body>

	<?php

 session_start();
	include('connexionBdd.php');

	$hashpass=$_POST['mot_de_passe'] . $salt;
	$hashpass=sha1($hashpass);
	$salt = "oeiez2201";
	$name = $_POST['nom_utilisateur'];

 	$query='SELECT * FROM utilisateur WHERE nom_utilisateur =\''.$name.'\' AND mdp_utilisateur=\''.$hashpass.'\'';

	echo $query;
//Je choisis le champ login
$reponse_login = $connexion->query($query); // Je choisis de la base de donné login le champ login


while ($donnees = $reponse_login->fetch()){
   if($donnees !== false){

	   $idUtilisateur=$_POST['idUtilisateur'];


		 if (!isset($_SESSION["idUtilisateur"])){

      header("location: ../index_home.php");
			}


   }else{
		 echo"Votre email et/ou votre mot de passe sont incorrects";
	 	}
}

$reponse_login->closeCursor();


?>






</body>
</html>
