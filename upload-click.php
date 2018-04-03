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

	<?php include('header_lilt.php');	?>

<!--	CONTENTS 	-->

	<form action="clicked.php" enctype="multipart/form-data" method="POST"> <!--envoie du formulaire en méthode post-->
		 <div class="container">
			 <div class="inner">
				 <div class="vp vp-1">
					 	<h3>"Music can change the world because it can change people."</h3>
						<label for="file" class="label-file">Import mp3 file</label>
						<input type="file" id="file" class="input-file" name ="mp3-file" accept=".mp3">
					</div>

					<div class="vp vp-2">
						<div class="song song-name">
							<p> Name your song </p>
							<input type="text" name="name"  class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
						</div>
						<div class="song artist-name">
							<p> Give your artist name </p>
							<input type="text" name="artist"  class="text-input"> <!--name permet de récupérer la valeur avec la méthode POST-->
						</div>
					</div>

					<div class="vp vp-3">
						<div class="inner-vp-3">

							<div class="menu-tags">
										<p> What kind of music make you ? </p>
										<select name="tag" >
											<option disabled selected> Select a tag </option>
											<option value="Pop">Pop</option>
										 	<option value="Rap">Rap </option>
									  	<option value="Reggae">Reggae </option>
										  <option value="Rock">Rock</option>
										 	<option value="Soul">Soul </option>
										  <option value="No tag">No tag </option>
										  <option value="Contest"><strong>#Contest</strong></option>
										</select>
							</div>
							<!-- <div class="check-contest">
								<input type="checkbox" id="check-contest" name="contest" value="contest">
    						<label for="check-contest">Add this song to the <span> #</span>Contest</label>
							</div> -->
						</div>
						<input type="submit" id="submit">
					</div>
			</div>
		</div>
	</form>

	<?php include("footer_lilt.php"); ?>



	<script src="Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
	<script src="Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
