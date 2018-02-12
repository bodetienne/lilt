<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Document sans titre</title>
	<link rel="stylesheet" href="../style/style_connexion.css" media="screen" type="text/css" />
</head>

<body>
	
	 <div id="container_connexion">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['nom_utilisateur'] !== ""){
                    $user = $_SESSION['nom_utilisateur'];
                    // afficher un message
                    echo "Hello $user, you are connected";
                }
            ?>
		 <p class="link_home"> <a href="../index_home.php"> Now go on the Home Page !</a> </p>
            
        </div>
	
	
	
	
</body>
</html>