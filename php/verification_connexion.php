<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Document sans titre</title>

</head>

<body>

	<?php


	include('connexionBdd.php');

// 	$hashpass=$_POST['mot_de_passe'] . $salt;
// 	$hashpass=sha1($hashpass);
// 	$salt = "oeiez2201";
// 	$name = $_POST['nom_utilisateur'];
//
//  	$query='SELECT * FROM utilisateur WHERE nom_utilisateur =\''.$name.'\' AND mdp_utilisateur=\''.$hashpass.'\'';
//
// 	echo $query;
// //Je choisis le champ login
// $reponse_login = $connexion->query($query); // Je choisis de la base de donné login le champ login
//
//
// while ($donnees = $reponse_login->fetch()){
//    if($donnees !== false){
//
// 	   $idUtilisateur=$_POST['idUtilisateur'];
//
//
// 		 if (!isset($_SESSION["idUtilisateur"])){
//
//       header("location: ../index_home.php");
// 			}
//
//
//    }else{
// 		 echo"Votre email et/ou votre mot de passe sont incorrects";
// 	 	}
// }
//
// $reponse_login->closeCursor();
	//$salt = "oeiez2201";
	$hashpass=$_POST['mot_de_passe'];
	$hashpass=sha1($hashpass);
	$name = $_POST['nom_utilisateur'];

	$connexionStr = new PDO('mysql:host=localhost;dbname=lilt', 'root', '');

	$req = $connexionStr->prepare('SELECT * FROM utilisateur WHERE nom_utilisateur =\''.$name.'\' AND mdp_utilisateur=\''.$hashpass.'\'');
	$req->execute(array(
	    'nom_utilisateur' => $name));
	$resultat = $req->fetch();


	//$isPasswordCorrect = password_verify($_POST['mot_de_passe'], $hashpass);
	if (!$resultat) {
		echo' mauvais id ou mdp 1';
	}else{
		if (!isset($_SESSION["idUtilisateur"])){

	    header("location: ../index_home.php");
			echo "Vous êtes connecté !";
	 	}
		else{
			echo "mauvais id ou mdp" . ' / nom utilisateur : '  ;
		}
	}

?>






</body>
</html>
