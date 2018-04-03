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



</head>

<body>
<?php include("header_lilt.php");?>




<div class="container gallery-container">

    <h1>#PLAYLISTS</h1>

    <p class="page-description text-center"> Your favourite playlists just right there ! </p>

		<div class="searchbar">
			<form class="searchbar" action="search.php" method="post">
				<input type="text" name="search" id="search-bar" required>
				<input type="submit" class="button" value="Search !"></input>
			</form>
		</div>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="lecteur.php">
									<h3>Best hits of Pharrel</h3>
                  <img src="Images/pharrel.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="lecteur.php">
									<h3>Future hits</h3>
                  <img src="Images/rockMan.jpeg" alt="Park">
								</a>
            </div>

            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="lecteur.php">
									<h3>Party songs</h3>
                  <img src="Images/yo.jpeg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="#">
									<h3>Top USA</h3>
                  <img src="Images/studio.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
									<h3>Sad songs</h3>
                  <img src="Images/violon.jpeg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
										<h3> Roadtrip </h3>
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
