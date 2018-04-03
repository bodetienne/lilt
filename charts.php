<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Charts</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<link rel="stylesheet" href="style/fluid-gallery.css">



</head>

<body>
<?php include("header_lilt.php");?>
<?php include("sql-Identification.php");?>




<div class="container gallery-container">

    <h1>#CHARTS</h1>

    <p class="page-description text-center">Let's sing in the shower ! </p>

		<div class="searchbar">
			<form class="searchbar" action="search.php" method="post">
				<input type="text" name="search" id="search-bar" required>
				<input type="submit" class="button" value="Search !"></input>
			</form>
		</div>


    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="#">
									<h3>Rap</h3>
                  <img src="Images/tatou.jpeg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
									<h3>Rock</h3>
                  <img src="Images/rockMan.jpeg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
									<h3>Pop</h3>
                  <img src="Images/dj.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="#">
									<h3>Reggae</h3>
                  <img src="Images/studio.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
									<h3>Pop</h3>
                  <img src="Images/cassettes.jpeg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="#">
										<h3>Soul </h3>
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
