<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Bienvenue sur LILT</title>

</head>

<body>





<?php


// Il faut que le formulaire soit rempli en entier pour être validé. Il doit aussi respecter certaines conditions : l'email doit contenir un @ et un point, le mot de passe doit contenir au moins 8 caractères, une majuscule et un chiffre

	$pseudo = $_POST['nom_utilisateur'];
	$email = $_POST['email'];
	$mdp = $_POST['mot_de_passe'];
	$comfirm_mdp = $_POST['confirm_pass'];


	//Vérification de l'email
	$point = strpos($email,".");
	$aroba = strpos($email,"@");

	$infos= ($_POST['nom_utilisateur'] AND $_POST['email'] AND $_POST['mot_de_passe'] AND $_POST['confirm_pass']);



// Si tout n'a pas été rempli :

	if (empty($infos)){
		echo("<center> Toutes vos informations n'ont pas été renseignées !");
		exit();
	}	elseif($point=='') {	//Vérification de l'email : il doit comporter un . et un @

		echo "Votre email doit comporter un <b>point</b>";

	}	elseif($aroba==''){

		echo"Votre email doit comporter un <b>'@'</b>";

	}	elseif ($_POST['confirm_pass'] != $_POST['mot_de_passe']){ // Vérification: les deux mot de passe doivent être identiques

		echo "Vos deux mots de passe sont différents";

	}


	else{	echo "<p>Bonjour ". $_POST['nom_utilisateur'] ." !</p>";
	}









// AVATAR





?>


<?php

include('connexionBdd.php');



var_dump($_POST);


	$nom = $_POST['nom_utilisateur'];
	$email = $_POST['email'];
	$mdp = $_POST['mot_de_passe'];
	$mdp2 = $_POST['confirm_pass'];




// Il faut insérer les informations rentrées dans la base de données
$sql = "INSERT INTO utilisateur (
									nom_utilisateur,
									email_utilisateur,
									mdp_utilisateur,
									avatar) VALUES (
														'" . $_POST['nom_utilisateur'] . "',
														'" . $_POST['email'] ."',
														'" . /*sha1*/($_POST['mot_de_passe'])."')";


// if (mysqli_query($connexion, $sql)) {
//     echo "New record created successfully";
// 	header('Location: connexion.php');
// } else {
//
// }


	$hashpass=$_POST['mot_de_passe'] /*. $salt*/;
	$hashpass=sha1($hashpass);
	//$salt = "oeiez2201";



	if(isset($nom) && isset($email) && isset($mdp) && isset($mdp2) ){

		if($nom!="" && $email!="" && $mdp!="" && $mdp2!=""){

          if($mdp==$mdp2){


        $query = $connexion->prepare( 'INSERT INTO utilisateur(
														nom_utilisateur,
														email_utilisateur,
														mdp_utilisateur)
																			VALUES (:nom_utilisateur,
																					:email,
																					:mot_de_passe)' );

        $query->bindValue(':nom_utilisateur', $nom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':mot_de_passe', $hashpass, PDO::PARAM_STR);

        $query->execute();

			 echo header("Location: connexion.php");

							}else echo"les 2 password doivent etre identique";


						} else echo"Veuillez saisir tous les champs";

					} else echo "</br>erreur"

?>



</body>

</html>
