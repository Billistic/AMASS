var tracking_email = document.getElementById("tracking_email");
var track_submit = document.getElementById("track_submit");

function track(){
	var firebaseRef = firebase.database().ref();
	firebaseRef.child("Text").set("Some Value");
}