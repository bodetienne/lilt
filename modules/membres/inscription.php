<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Inscription</title>
	
</head>

<body>


<?php
	
	// Ne pas oublier d'inclure la librairie Form
	
	include CHEMIN_LIB. 'form.php';	
	
	
	
$form_inscription= new Form('formulaire_inscription');
	
$form_inscription->method('POST');
	
	
$form_inscription->add('Text', 'nom_utilisateur')
				 ->label('Votre nom d\'utilisateur');


$form_inscription->add('Password', 'mdp')
				 ->label('Votre mot de passe');
	

$form_inscription->add('Password', 'mdp')
				 ->label('Votre mot de passe');
	
	
$form_inscription->add('Password', 'mdp_verif')
				 ->label('Votre mot de passe (vérification)');
	
	
$form_inscription->add('Email', 'adresse_email')
				 ->label('Votre adresse email');
	
	
$form_inscription->add('File', 'avatar')
				 ->filter_extension('jpg','png','gif')
				 ->max_size(8192) // 8Kb
				 ->label("Votre avatar (facultatif)")
				 ->Required(false);
	
	
	
$form_inscription->add('Submit', 'submit')
				 ->value("Je veux m'inscrire !");
	
	
// Pré-remplissage avec les valeurs précédemment entrées (s'il y en a)

	$form_inscription->bound($_POST)
	
?>	
	
<?php	
		
// Affichage du formulaire
	include CHEMIN_VUE.'formulaire_inscription.php';
	
?>

<h2>Inscription au site</h2>


<?php

	echo $form_inscription;

	
?>




</body>

</html>