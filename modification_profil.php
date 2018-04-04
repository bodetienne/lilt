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
     		<form method="post" action="modif.php"  enctype="multipart/form-data">
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

		<h3>Your networks</h3>

			<div class="networksLinks">

				<label for="fb">Facebook</label>
				<input type="text" name="facebook" placeholder="<?php echo $donnees['facebook']?>">
					</br>
				<label for="insta">Instagram</label>
				<input type="text" name="instagram" placeholder="<?php echo $donnees['instagram']?>">
					</br>
				<label for="twitter">Twitter</label>
				<input type="text" name="twitter" placeholder="<?php echo $donnees['twitter']?>">

			</div>

				<label for="file"> Your profile picture (JPG) | max 15 Ko </label>
				<input type="file" name="avatar" id="avatar" accept="image/JPG" >
			</br>
    </div>
    <div class="modal-footer">
      <input type="submit" class="submit" value="Let's go"/>
			</form>
    </div>






  </div>
</div>


</body>
</html>
