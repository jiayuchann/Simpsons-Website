$(function() {

	$('#buttonInfo').addClass('btn-info')
	$('#buttonDiversity').addClass('btn-danger')
	$('#buttonCrime').addClass('btn-success')
	
	document.getElementById('diversity').style.display='none';
	document.getElementById('disaster').style.display='none';
	document.getElementById('crime').style.display='none';
	document.getElementById('info').style.display='none';

	$("#buttonInfo").click(function() {
		$('#info').slideToggle(1000)
	})
	$("#buttonDiversity").click(function() {
		$('#diversity').slideToggle(1000)
	})
	$("#buttonDisaster").click(function() {
		$('#disaster').slideToggle(1000)
	})
	$("#buttonCrime").click(function() {
		$('#crime').slideToggle(1000)
	})
	

});