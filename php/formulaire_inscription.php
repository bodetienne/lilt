<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>Inscription sur LILT</title>
	<link rel="stylesheet" href="../style/style_formulaire.css">

	
</head>

<body>

<!----------------------------------------------------------
	HEADER
----------------------------------------------------------->
	
<!----------------------------------------------------------
	CONTENTS
----------------------------------------------------------->
	
<h1> Join us ! </h1>

<div class="logo_inscription"> <img src="../Icon/logo Lilt.png"></div>


<form method="post" action="traitement.php">
	<fieldset>	
		<legend> What about you ? </legend>
		
		<p>
			<label for="nom_utilisateur"> Your username </label>
			<input type="text" name="nom_utilisateur" id="nom_utilisateur" placeholder=" let your imagination speak" maxlength="32">
			
		</p>
		<p>
			
			<label for="email"> E-mail </label>
			<input type="text" name="email" id="adresse_email" maxlength="128">
			
		</p>
		<p>
			<label for="pass"> Password </label>
			<input type="password" name="mot_de_passe" id="mot_de_passe" maxlength="40" >
		</p>
		<p>
			<label for="confirm_pass">Confirm your password</label>
			<input type="password" id="confirm_pass" name="confirm_pass" maxlength="40" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
		</p>
			
		<p>
			<label for="icone"> Your profile picture (JPG) | max 15 Ko </label>
			<input type="file" name="avatar" id="avatar" accept="image/jpg">
		</p>
		<p>
			<input type="submit" value="Let's go"/>
		</p>
	
	</fieldset>
</form>

	
<div class="dejaINscrit"> <p> You already have sign up ? <a href="connexion.php">Log in !</a></p></div>

	
	
	
</body>


</html>