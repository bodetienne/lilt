<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Upload</title>
	<link rel="stylesheet" href="vendors/Bootstrap/Bootstrap-Design/vendors/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/style_home2.css">

</head>

<body>

<!-- HEADER	-->

	<?php include('header.php');	?>

<!--	CONTENTS 	-->

	<form action="clicked.php" method="POST"> <!--envoie du formulaire en méthode post-->
		 <div class="container">
			 <div class="inner">
				 <div class="vp vp-1">
					 	<h3>"Fumes la vie avant qu'elle ne te fume."</h3>
						<label for="file" class="label-file">Import file</label>
						<input id="file" class="input-file" accept=".mp3" type="file">
					</div>

					<div class="vp vp-2">
						<div class="song song-name">
							<p> Name your song </p>
							<input type="text" name="name"  class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
						</div>
						<div class="song artist-name">
							<p> Give us your artist name </p>
							<input type="text" name="artist"  class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
						</div>
					</div>

					<div class="vp vp-3">
						<div class="inner-vp-3">
							<p> What kind of music make you ? </p>
							<div class="menu-tags">
								<ul class="select-tags" name="tag">
									<li>Select a tag </li>
									<ul class="tags">
										<li>Pop </li>
										<li>Rap </li>
										<li>Reggae </li>
										<li>Rock</li>
										<li>Soul </li>
										<li>No-tag </li>
									</ul>
								</ul>
							</div>
		
						</div>
						<input type="submit" id="submit">
					</div>
			</div>
		</div>
	</form>

	<?php include("footer.php"); ?>



	<script src="Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
