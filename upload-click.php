<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Upload</title>
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<!-- HEADER	-->

	<?php include('header.php');	?>

<!--	CONTENTS 	-->

	<form action="clicked.php" method="POST"> <!--envoie du formulaire en méthode post-->
		 <div class="container">
			<div class="song song-name">
				<input type="text" name="name" placeholder="Give a name to your song" class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
			</div>
			<div class="song song-name">
				<input type="text" name="artist" placeholder="Give your artist name" class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
			</div>
			<!-- <div class="song song-duree">
				<input type="time" step="2" name="duree" placeholder="Give the duration of your song" class="duree-input">
			</div> -->
			<div class="import-mp3 song">
				<input type="file" name="mp3-file" class="btn-import" accept=".mp3"/>
			</div>

			<div class="song">
				<SELECT name="tag" size="1" class="select-tags">
					<OPTION selected disabled>Add a tag
					<OPTION>Rock
					<OPTION>Rap
					<OPTION>Soul
					<OPTION>Pop
					<OPTION>Reggae
					<OPTION>No tag
				</SELECT>
			</div>
				<input type="submit" id="submit">
		</div>
	</form>




	<script src="Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
