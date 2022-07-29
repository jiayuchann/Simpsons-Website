if (document.readyState == 'loading'){
	document.addEventListener('DOMContentLoaded', ready)
}
else {
	ready();
}


// initialize global variable (used in updateTotal() function)
var total = 0;


function ready(){
// handling remove button
var removeCartItems = document.getElementsByClassName('btn-danger');
for (var i = 0; i < removeCartItems.length; i++) {
	removeCartItems[i].addEventListener("click", function(e){
		e.target.parentElement.remove();
		updateTotal();
	});
}

//handling quantity input
var quantityInput = document.getElementsByClassName('cart-quantity-input');
for (var i = 0; i < quantityInput.length; i++) {
	quantityInput[i].addEventListener('change', function(e){
		if (isNaN(e.target.value) || e.target.value <= 0){
			input.value = 1;
		}
		updateTotal();
	})
}

//handling add to cart buttons
var addToCartButtons = document.getElementsByClassName('shop-item-button');
for (var i = 0; i < addToCartButtons.length; i++) {
	addToCartButtons[i].addEventListener('click', function(e){
		var button = e.target;
		var item = button.parentElement;
		var title = item.getElementsByClassName('shop-item-title')[0].innerText;
		var price = item.getElementsByClassName('shop-item-price')[0].innerText;
		var pic = item.getElementsByClassName('shop-item-pic')[0].src;
		addToCart(title, price, pic);
	})
}

var purchaseButton = document.getElementsByClassName('purchase-button')[0];
	purchaseButton.addEventListener('click', function(e){
		alert("Congrats! You wasted $" + total);
		total = 0;
		var cartItems = document.getElementsByClassName('cart-items')[0];
		while(cartItems.hasChildNodes()){
			cartItems.removeChild(cartItems.firstChild);
		}
		updateTotal();
});
}


//add to cart function called in ready()
function addToCart(title, price, src){
	var cartRow = document.createElement('div');
	cartRow.classList.add('cart-row');
	var cartItems = document.getElementsByClassName('cart-items')[0];
	//avoiding duplication
	var itemNames = cartItems.getElementsByClassName('cart-item-title');
	for (var i = 0; i < itemNames.length; i++) {
		if (itemNames[i].innerText == title){
			alert('Item has already been added!');
			return;
		}
	}
	var content = 
	`<div class="cart-item cart-column">
		<img class="cart-item-image rounded" src="${src}">
		<span class="cart-item-title">${title}</span>
	</div>
	<span class="cart-price cart-column">${price}</span>
	<div class="cart-quantity cart-column">
		<input class="cart-quantity-input" type="number" value="1" min="1" max="9">
	</div>
	<button class="btn-danger" type="button">REMOVE</button>`;
	cartRow.innerHTML = content;
	cartItems.append(cartRow);
	updateTotal();
	cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', function(e){
		e.target.parentElement.remove();
		updateTotal();
	})
	cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', function(e){
		if (isNaN(e.target.value) || e.target.value <= 0){
			input.value = 1;
		}
		updateTotal();
	})

}

// updates the total price
function updateTotal(){
	var cartItems = document.getElementsByClassName('cart-row');
	total = 0;
	for (var i = 0; i < cartItems.length; i++) {
		var cartRow = cartItems[i];
		var priceElement = cartRow.getElementsByClassName('cart-price')[0];
		var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
		var price = parseFloat(priceElement.innerText.replace('$', ''));
		var quantity = quantityElement.value;
		total = total + (price*quantity);
	}
	total = Math.round(total * 100)/100;
	document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
}