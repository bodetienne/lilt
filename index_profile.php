<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>My profile</title>
	
	
	<link rel="stylesheet" href="vendors/Bootstrap/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style_profile.css">
	
</head>

<body>


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
                if($_SESSION['nom_utilisateur'] !== ""){
                    $user = $_SESSION['nom_utilisateur'];
                    // afficher un message: ici le nom d'user
                    echo "$user";
                }
            ?>  </h2>
		
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
<div class="container">
	<div class="inner">
		
		<a href="composition.php"><h1>My compositions</h1><img src="Images/Rectangle.png" alt="djembé" width="800" height="400"></a>
	</div>
	<div class="inner">
		<a href="#"><h1>My playlists</h1><img src="Images/Rectangle 7.png" alt="ipod" width="800" height="400"></a>
	</div>
</div>
  	

	


	

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