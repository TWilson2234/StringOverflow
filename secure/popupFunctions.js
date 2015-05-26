// Validating Empty Field
function check_empty() {
if (document.getElementById('username').value == "" || document.getElementById('password').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('login').submit();
}
}
//Function To Display Popup
function login_show() {
document.getElementById('popupGreyout').style.display = "block";
document.getElementById('popupLogin').style.display = "block";
}
//Function to Hide Popup
function login_hide(){
document.getElementById('popupGreyout').style.display = "none";
document.getElementById('popupLogin').style.display = "none";
}

function artist_show(artist_id) 
{
	document.getElementById('popupGreyout').style.display = "block";
	document.getElementById(artist_id).style.display = "block";
}

function artist_hide(artist_id) 
{
	document.getElementById('popupGreyout').style.display = "none";
	document.getElementById(artist_id).style.display = "none";
}