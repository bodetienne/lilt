// JavaScript Document


$(function(){
	$("#coeurVide").mouseover(function(){
		$(this).attr('src','Images/Icon/coeurPlein.png');
	});
	$("#coeurVide").mouseout(function(){
		$(this).attr('src','Images/Icon/coeurVide.png');
	});
});
$(function(){
	$("#parametres").mouseover(function(){
		$(this).attr('src','Images/Icon/settings2.png');
	});
	$("#parametres").mouseout(function(){
		$(this).attr('src','Images/Icon/settings.png');
	});
});


// ------------- Modifications profil ------------- //


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