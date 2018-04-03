<!doctype html>
<html>
<head>

	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="../style/style_connexion.css" />

</head>

<body>

<!---------------------------------------
	HEADER
---------------------------------------->

	<div class="header_connexion">
		<a href="../index.php">
			<img src="../Images/Icon/logo-Lilt.png"alt='logoLilt'>
		</a>
			<p> Listen, Intone, Like and Tune.</p>
	</div>


<!---------------------------------------
	Connexion
---------------------------------------->

	<div id="container_connexion">
            <!-- zone de connexion -->

            <form action="verification_connexion.php" method="post">
                <h1>Connexion</h1>

								<div class="error">
									Looks like either your email address or password were incorrect.<span id='gras'> Wanna try again?</span>
								</div>

                <label><b>Username</b></label>
                <input type="text" placeholder="Give your username" name="nom_utilisateur" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Give your password" name="mot_de_passe" required>

                <input type="submit" id='submit' classs='btn' value='LOGIN' >

            </form>

		<div class="link_inscription">
			<p>	Not among us yet ? <a href="formulaire_inscription.php"> Sign up !</a></p>
		</div>

    </div>


</body>
</html>
