<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/header.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
    <div class="header-nightsky">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="index.php"> <img src="Images/Icon/logo-lilt.png" alt="logo-header" class="imgLogo"> </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="button_box2">
                      <form class="form-wrapper-2 cf">
                      <input type="text" name="search" id="search-bar" placeholder="Search everything you want " required>
                    	<input type="submit" class="input_submit" value="Search !"></input>
                      </form>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="playlists.php">PLAYLISTS <span class="caret"></span></a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul> -->
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="charts.php">CHARTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>

                        <div class="id-content">
                          <a href="profil.php"><img src="Images/Icon/user.png" alt="logo site" class="id-photo"></a>
                          <p class="id-name"><a href="index_profile.php">

                          </a>

                          <span class="deco"><a href="php/deconnexion.php"><img src="Images/Icon/powerOnOff.png" alt="déconnexion" width="20" height="20"></a></span></p>
                        </div>
                    </ul>


                </div>

            </div>
        </nav>
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
