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
	$mdp = sha1($mdp);
	
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
	
	
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur	
if (isset($_FILES['avatar']) AND $_FILES['avatar']['error']==0){
	//Testons si le fichier n'est pas trop gros 
	if ($_FILES['avatar']['size']<= 15000){
		
		// Testons si l'extension est autorisée 
		$infofichier = pathinfo($_FILES['avatar']['name']);
		$extension_upload = $infofichier['extension'];
		$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		if(in_array($extension_upload,$extensions_autorisees)){
			// On peut valider le fichier et le stocker définitivement
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'. basename($_FILES['avatar']['name']));
				echo "L'envoi à bien été effectué ! ";
		}
	}
	
	
	
}	
	
	
	
	
	
	
?>


<?php
// Inscription 
//Connexion à la base de donnée

$link = mysqli_connect ( "localhost", "root", "", "lilt");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;// Message: si la connexion s'est bien faite à la base de données
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$query="select messageAlerte from alerte ";

	
	

if ($stmt = mysqli_prepare($link, $query)){
	echo'execution de la requete';
	/* execute la déclaration*/
	mysqli_stmt_execute($stmt);
	
	echo ' association des colonnes et variables ';
	/*lier le résultat des variables*/
	mysqli_stmt_bind_result($stmt,$alerte);
	
	/* chercher les valeurs */
	
	while (mysqli_stmt_fetch($stmt)){
		echo"<p> Alerte! ", $alerte, "<p>";
	}
} else {
	echo'Cela ne fonctionne pas';
}
	

// Il faut insérer les informations rentrées dans la base de données
$sql = "INSERT INTO utilisateur (
									nom_utilisateur, 
									email_utilisateur,
									mdp_utilisateur,
									avatar) VALUES (
														'" . $_POST['nom_utilisateur'] . "',
														'" . $_POST['email'] ."',
														'" . /*sha1*/($_POST['mot_de_passe'])."',
														'" . $_POST['avatar'] ."')";

 
if (mysqli_query($link, $sql)) {
    echo "New record created successfully";
	header('Location: connexion.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);

}

	


	
	

mysqli_close($link);
	
	
?>	

	

	
	

</body>

</html>