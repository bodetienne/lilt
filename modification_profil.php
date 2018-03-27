<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Modification profil Lilt</title>

	<link rel="stylesheet" href="../style/main.css">


	<script src="js/jquery.min.js"></script>
	<script src="js/emmajs.js"></script>


</head>

<body>

<?php

?>

	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">

		<h2>Modification of your informations</h2>
		<span class="close">&times;</span>

    </div>
    <div class="modal-body">
		<h3>Personal informations</h3>
     		<form method="post" action="modif.php" >
				<label for="nom_utilisateur">Username</label>
				<input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php $pseudo ?>" placeholder="<?php echo $donnees['nom_utilisateur']?>" maxlength="32">
				</br>
				<label for="email">E-mail</label>
				<input type="text" name="email_utilisateur" id="adresse_email" value="<?php $email ?>" placeholder="<?php echo $donnees['email_utilisateur'] ?>" maxlength="128">
				</br>
	  			<label for="pass">New password</label>
	  			<input type="password" name="mdp_utilisateur" value="<?php $mdp ?>" id="mot_de_passe" maxlength="40">
	  			</br>



		<h3>Your profile</h3>

				<label for="citation"> Citation</label>
				<input type="text" name="citation" id="citation" placeholder="<?php echo $donnees['citation']?>">
				</br>
				<label for="age"> Age </label>
				<input type="number" name="age" id="age" max="110" min="0" placeholder="<?php echo $donnees['age']?>" >
				</br>
				<label for="description">Description</label>
				<input type="text" name="description" placeholder="<?php echo $donnees['description']?>" >
				</br>

				<label for="icone"> Your profile picture (JPG) | max 15 Ko </label>
				<input type="file" name="avatar" id="avatar" accept="image/jpg" >
    </div>
    <div class="modal-footer">
      <input type="submit" class="submit" value="Let's go" id='<?php echo $id ?>'/>
			</form>
    </div>
  </div>

</div>


<?php

?>

<!------------------------------------>
<?php /*include('footer.php')*/ ?>
<!------------------------------------>


</body>
</html>
