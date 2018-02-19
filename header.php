<!doctype html>
<html>
	
<head>
	<meta charset="utf-8">
	<title>Document sans titre</title>
	
</head>

<body>
	
<header class="block-header">
	<div class="inner1">

	<div class="logo">
		<a href="index_home.php"><img src="Images/Icon/logo Lilt.png" alt="logo site" class="logo"></a>
	</div>
		
	<div class="nav-block">
		<ul class="nav">
		<li class="nav-item">
		<a class="nav-link" href="lecteur.php">Playlists</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Charts</a>
		</li>
		</ul>
	</div>
		
	<div>
		<img src="Images/Icon/search.png" alt="search" class="search2">
	</div>
		
	<div class="button_box2">
		<form class="form-wrapper-2 cf">
		<input type="text" placeholder="Search everything you want " required>
		<button type="submit"> Search </button>
		</form>
	</div>
		
	<div class="id-content">
		<a href="index_profile.php"><img src="Images/Icon/user.png" alt="logo site" class="id-photo"></a>
		<p class="id-name"><a href="index_profile.php">          
			<?php
                session_start();
                if($_SESSION['nom_utilisateur'] !== ""){
                    $user = $_SESSION['nom_utilisateur'];
                    // afficher un message
                    echo $user;
                }
            ?> 
			
		</a>
		
		<span class="deco"><a href="php/deconnexion.php"><img src="Images/Icon/powerOnOff.png" alt="déconnexion" width="20" height="20"></a></span></p>
	</div>
		
	</div>
</header>

<script src="../../../Integration web/Bootstrap/Bootstrap-Design/vendors/jquery/jquery.min.js"></script>
<script src="../../../Integration web/Bootstrap/Bootstrap-Design/vendors/popper/popper.min.js"></script>
<script src="../../../Integration web/Bootstrap/Bootstrap-Design/vendors/bootstrap/js/bootstrap.min.js"></script>

	
	
<style>
	
/*----------------------------------------------------------- 
RESET
-----------------------------------------------------------*/
*,
*:before,
*:after {
box-sizing: border-box;
}

h1,h2,h3,h4,h5,h6{
margin: 0;
}
ul, ol {
margin: 0;
padding: 0;
list-style-type: none;
}
a {
text-decoration: none;
}

/*----------------------------------------------------------- 
HEADER
-----------------------------------------------------------*/
	
	.deco img{
		max-width: 100%;
    	height: auto;
	}	
	
	
.block-header{
display: flex;
	margin: auto;
}

.inner1{
display: flex;
flex-wrap: nowrap;
align-items: center;
margin: 0 auto;
/*display: block;*/
}

.logo {
width: 5rem;
text-align: left;

}

.nav-block a {
color: #4b4b4b;
}

.search2 {
width: 1.5rem;
}

.button_box2 {
display: none;
}

.id-content{
display: flex;
margin-top: 1rem;
}

.id-photo {
width: 1.5rem;
height: 1.5rem;
margin-left: 1rem;
margin-right: .7rem;
}






@media(min-width: 768px){
/*----------------------------------------------------------- 
HEADER
-----------------------------------------------------------*/
.logo{
width: 7rem;
align-content:flex-start;
}
.search {
display: none;
}

.id-content{
float: right;
}
/********************************
SEARCH **************************************/



.button_box2 {
display: flex;
margin:10px auto;
}

/*-------------------------------------*/
.cf:before, .cf:after{
content:"";
display:table;
}
.cf:after{
clear:both;
}
.cf{
zoom:1;
}
/*-------------------------------------*/

.form-wrapper-2 {
width: 330px;
padding: 15px;
display: flex;

}
.form-wrapper-2 input {
width: 300px;
height: 20px;
padding: 10px 5px;
float: left;
font: bold 15px 'Raleway', sans-serif;
border: 0;
background: #eee;
border-radius: 3px 0 0 3px;
margin: auto 0;
}
.form-wrapper-2 input:focus {
outline: 0;
background: #fff;
box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
}
.form-wrapper-2 input::-webkit-input-placeholder {
color: #999;
font-weight: normal;
font-style: italic;
}


.form-wrapper-2 button {
overflow: visible;
position: relative;
float: right;
border: 0;
padding: 0;
cursor: pointer;
height: 40px;
width: 110px;
font: bold 15px/40px 'Raleway', sans-serif;
color: #fff;
text-transform: uppercase;
background: #e40750;
border-radius: 0 3px 3px 0;
text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}


.form-wrapper-2 button:hover{
background: #68B8A5;
}
.form-wrapper-2 button:active,
.form-wrapper-2 button:focus{
background: #e40750;
}
.form-wrapper-2 button:before {
content: '';
position: absolute;
border-width: 8px 8px 8px 0;
border-style: solid solid solid none;
border-color: transparent #e40750 transparent;
top: 12px;
left: -6px;
}
.form-wrapper-2 button:hover:before{
border-right-color: #e40750;
}
.form-wrapper-2 button:focus:before{
border-right-color: #e40750;
}


}




@media(min-width: 1024px){
/*----------------------------------------------------------- 
HEADER
-----------------------------------------------------------*/
 
.logo{
width: 9rem;
align-content:flex-start;
}
.nav a{
font-size: 1.7rem;
}
.search {
display: none;
}
.form-wrapper-2 input {
width: 450px;
height: 50px;
}
.form-wrapper-2 button {
width: 150px;
height: 60px;
}
.form-wrapper-2 button:before {
top: 22px;
}
.id-content img{
width: 3rem;
height: 3rem;
}

.id-content p{
font-size: 1.6rem;
}
}

	

</style>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
	
</html>