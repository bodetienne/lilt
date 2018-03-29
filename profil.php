<html>
<head>

	<meta charset="utf-8">
	<title>My profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/header.css">
  <!-- <link rel="stylesheet" href="style/profil.css"> -->
    		<link rel="stylesheet" href="style/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="style/gallery-grid.css">


</head>

<body>
<?php
session_start();
$connexionStr=new PDO("mysql:host=localhost;dbname=lilt;charset=utf8",'root','');
$nom = $connexionStr->query("SELECT * FROM utilisateur WHERE idUtilisateur=" . $_SESSION['id']);

$donnees = $nom->fetch();

include("header_lilt.php")
?>
<!-- Wrapper -->
  <div id="wrapper">

    <!-- Header -->
      <header id="header">
        <div class="imgSettings" id="imgSetting">
          <img src="Images/Icon/settings.png" alt="settings" id="parametres">
          <?php include('modification_profil.php')?>
        </div>
        <span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
        <h1>			<?php	echo $donnees['nom_utilisateur'];?></h1>
        <ul class="icons">
          <li><a href="<?php	echo $donnees['twitter'];?>" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="<?php	echo $donnees['facebook'];?>" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="<?php	echo $donnees['instagram'];?>" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
          <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
        <p> "<?php echo $donnees['citation']; ?>" </p>
    		<p> 104 | followers 20 | following </p>
        <div class="about_me">
          <!-- <h3>About me</h3> -->
          <p><?php echo $donnees['age']; ?> yo</p>
          <p><?php echo $donnees['description']; ?></p>
        </div>


      </header>
      </div>

      <div class="tz-gallery">

          <div class="row">
              <div class="col-sm-4 col-md-2">
                  <a class="lightbox" href="#">
                      <img src="Images/My_compositions.png" alt="compo">
                  </a>
              </div>
              <div class="col-sm-4 col-md-2">
                  <a class="lightbox" href="playlists.php">
                      <img src="Images/My_playlists.png" alt="Bridge">
                  </a>
              </div>
          </div>

      </div>

<?php
$nom->closeCursor();
include("footer_lilt.php")
?>

</body>




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
