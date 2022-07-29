$(function() {

	document.getElementById('imageJYC').style.display='none';
	document.getElementById('imageJTC').style.display='none';

	$("#buttonJYC").click(function() {
		$('#imageJYC').slideToggle(1000)
	})

	$("#buttonJTC").click(function() {
		$('#imageJTC').slideToggle(1000)
	})

});