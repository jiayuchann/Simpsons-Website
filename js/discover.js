$(function() {

	document.getElementById('aboutDonuts').style.display='none';
	document.getElementById('aboutTacos').style.display='none';
	document.getElementById('aboutBurger').style.display='none';
	document.getElementById('aboutBar').style.display='none';
	document.getElementById('aboutPark').style.display='none';
	document.getElementById('aboutConv').style.display='none';
	document.getElementById('aboutBeer').style.display='none';
	document.getElementById('aboutIceCream').style.display='none';

	$("#donutsButton").click(function() {
		$('#aboutDonuts').slideToggle(1000)
	})
	$("#tacoButton").click(function() {
		$('#aboutTacos').slideToggle(1000)
	})
	$("#burgerButton").click(function() {
		$('#aboutBurger').slideToggle(1000)
	})
	$("#barButton").click(function() {
		$('#aboutBar').slideToggle(1000)
	})
	$("#parkButton").click(function() {
		$('#aboutPark').slideToggle(1000)
	})
	$("#convButton").click(function() {
		$('#aboutConv').slideToggle(1000)
	})
	$("#beerButton").click(function() {
		$('#aboutBeer').slideToggle(1000)
	})
	$("#iceCreamButton").click(function() {
		$('#aboutIceCream').slideToggle(1000)
	})

});