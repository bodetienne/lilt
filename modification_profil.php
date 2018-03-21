<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Modification profil Lilt</title>
	
	<link rel="stylesheet" href="vendors/Bootstrap/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style_profile.css">
	<link rel="stylesheet" href="style/style_home2.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/emmajs.js"></script>
	
	
</head>

<body>
	

	
	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
		
		<h2>Settings</h2>
		<span class="close">&times;</span>
		
    </div>
    <div class="modal-body">
		<h3>Personal informations</h3>
     		<form method="post" action="modif.php" >
				<label for="nom_utilisateur">Username</label>
				<input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php if(isset($_SESSION['nom_utilisateur'])) ?>" maxlength="32">
				</br>
				<label for="email">E-mail</label>
				<input type="text" name="email" id="adresse_email" maxlength="128">
				</br>
	  			<label for="pass">New password</label>
	  			<input type="password" name="mot_de_passe" id="mot_de_passe" maxlength="40">
	  			</br>
	  			
		
			
		<h3>Your profile</h3>
     		 	<label for="icone"> Your profile picture (JPG) | max 15 Ko </label>
				<input type="file" name="avatar" id="avatar" accept="image/jpg">
    </div>
    <div class="modal-footer">
      <input type="submit" class="submit" value="Let's go" />
			</form>
    </div>
  </div>

</div>


	
	
<!------------------------------------>	
<?php /*include('footer.php')*/ ?>
<!------------------------------------>	
	
	
</body>
</html>