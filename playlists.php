<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Playlists</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="style/playlists.css">
	<script type="text/javascript" src="js/playlists.js"></script>


</head>

<body>
<?php include("header_lilt.php");?>




<div class="container gallery-container">

    <h1>#PLAYLISTS</h1>

    <p class="page-description text-center"> Your favourite playlists just right there ! </p>

    <div class="searchbar">
      <input type="text" name="search" id="search-bar">
      <button class="button"><span> Search ! </span></button>
    </div>

    <div class="tz-gallery">

	        <div class="row">

	            <div id="Rap" class="col-sm-12 col-md-4">
									<a class="lightbox" href="#">
										<h3>Rap</h3>
	                  <img src="Images/pharrel.jpeg" alt="Bridge">
	                </a>
	            </div>
	            <div id="Rock" class="col-sm-6 col-md-4">
								<a class="lightbox" href="#">
										<h3>Rock</h3>
	                  <img src="Images/rockMan.jpeg" alt="Park">
	                </a>
	            </div>
	            <div id="Pop" class="col-sm-6 col-md-4">
	                <a class="lightbox" href="#">
										<h3>Pop</h3>
	                  <img src="Images/yo.jpeg" alt="Tunnel">
	                </a>
	            </div>
	            <div id="Reggae" class="col-sm-12 col-md-8">
	                <a class="lightbox" href="#">
										<h3>Reggae</h3>
	                  <img src="Images/studio.jpg" alt="Traffic">
	                </a>
	            </div>
	            <div id="No-tag" class="col-sm-6 col-md-4">
	                <a class="lightbox" href="#">
										<h3>No tag</h3>
	                  <img src="Images/violon.jpeg" alt="Coast">
	                </a>
	            </div>
	            <div id="Soul" class="col-sm-6 col-md-4">
	                <a class="lightbox" href="#">
											<h3> Soul</h3>
	                    <img src="Images/man.jpeg" alt="">
	                </a>
	            </div>

	        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>




<?php include('footer_lilt.php'); ?>
</body>
