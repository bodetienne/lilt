<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>My profile</title>
	
	
	<link rel="stylesheet" href="vendors/Bootstrap/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style_profile.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/emmajs.js"></script>
	

</head>

<body>
	
	<?php
	// Tout début du code PHP. Situé en haut de la page web : permet de cacher les erreurs aux visiteurs
	/*ini_set("display_errors",0);error_reporting(0);*/
	?>

	<script src="Bootstrap/vendors/jquery/jquery.min.js"></script>
	<script src="Bootstrap/vendors/popper/popper.min.js"></script>
	<script src="Bootstrap/vendors/bootstrap/js/bootstrap.min.js"></script>


<?php include("header.php")?>


<!-----------------------------------------------
	HEADER PROFILE
------------------------------------------------>

<div class="header_profile">
	<div class="photo_profile">
		<img src="Images/people-2563491_1280.jpg" alt="photo_de_profil">
	</div>
	<div class="info">
		<h2> <!--On appelle le nom de l'utilisateur -->
			<?php
/*			require_once("php/pdoModel.php");
	
			PDOModel::connectDB("127.0.0.1", "root", "", "lilt");	
 			$output = PDOModel::getSQL("utilisateur", "*", "`idUtilisateur` = ");
			echo $output->nom_utilisateur;*/


            ?>  </h2>
		<div class="imgSettings" id="imgSetting">
			<img src="Images/Icon/settings.png" alt="settings" id="parametres">
			<?php include('modification_profil.php')?>
		</div>			
		<p> "Nothing's gonna change my world" </p>
		<p> 104 | followers 20 | following </p>	

	</div>
	<div class="about_me">
		<h3>About me</h3>
		<p>22 yo</p>
		<p>Play piano and sing sometimes</p>
	</div>
</div>

<div class="block-trophy">
	<p>My trophies <img src="Images/Icon/cup.png"> 22/12/2017 </p>
</div>


<!----------------------------------------------
	CONTENTS
----------------------------------------------->
<!--<div class="title_compo">
	<a href="#"><h1>My compositions</h1></a>
</div>
<div class="title_playlists">
	<a href='#'><h1>My playlists</h1></a>
</div>	-->
<div class="photosCompoPlaylist">
	<div class="inner">
		
		<a href="composition.php"><h1>My compositions</h1><img src="Images/Rectangle.png" alt="djembé" width="800" height="400"></a>
	</div>
	<div class="inner">
		<a href="#"><h1>My playlists</h1><img src="Images/Rectangle 7.png" alt="ipod" width="800" height="400"></a>
	</div>
</div>
  	
	
	
	
<!---------------Modifications Profile-------------------->



<script>	

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("parametres");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	

<!----------------------------------------------
	FOOTER
----------------------------------------------->


<?php include("footer.php");?>
	
<style>

	
.container_footer{

	display: flex;
	margin: auto;
}
.block-footer .inner{
	margin: auto;
}

.block-footer{
	padding-top: 50px;
	background: #4B4B4B;
	color: white;
	display: flex;
	margin: auto;
}

.block-footer .container_footer .logo_bas img{
	
	margin: 20px;
	width: 50px;
	height: 50%;
}

.block-footer .social_media {
	text-align: center;
	font-weight: bold;
	margin: 20px;

	
}

.block-footer .social_media img{
	width: 20px;
	height: 20px;
	
}

.block-footer .footer_right a{
	color: white;
}

.footer_right{
	margin: 20px;
	text-align: right;
}

.footer_right p{
	font-size: 12px;
}
	
</style>



</body>
</html>