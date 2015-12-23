var cart = [];

init();

function init(){
	var c = Cookies.get("cart");
	if(typeof(c) !== "undefined"){
		var d = JSON.parse(c);
		cart = d;
		updateCart();
	}
}

function addPizzaToCart(form){

	var $inputs = form.find(':input');

	var values = {};
	$inputs.each(function() {
		values[this.name] = $(this).val();
	});

	var drink = values["selectBoisson"];
	var price = values["price"];
	var quantity = values["selectQuantity"];
	var category = values["category"];

	var meal = {"drink":drink, "price":price,"quantity":quantity, "category":category};
	cart.push(meal);
	updateCart();
	notify("Produit ajouté au panier");
}


function addSandwichToCart(form){

	var $inputs = form.find(':input');

	var values = {};
	$inputs.each(function() {
		values[this.name] = $(this).val();
	});

	var options = [];

	form.find(":input:checkbox:checked").each(function() {
		options.push($(this).val());
	});

	var sauce = values["selectSauce"];
	var drink = values["selectBoisson"];
	var price = values["price"];
	var quantity = values["selectQuantity"];
	var category = values["category"];

	var meal = {"sauce":sauce, "drink":drink, "price":price,"quantity":quantity, "options":options, "category":category};
	cart.push(meal);
	updateCart();
	notify("Produit ajouté au panier");
}


function updateCart(){
	var price = 0;
	for(var i = 0; i < cart.length; i++){
		price += cart[i].quantity * cart[i].price;
	}
	Cookies.set("cart", cart);
	$("#cartTotal").html(price);
}

function notify(msg, level){
	$.notify(msg, typeof(level) === "undefined" ? "success" : level);
}

function openModal(id)
{
	$('#orderModal').modal();
}

$("#emptyCartButton").click(function(){
	if(cart.length === 0)return;
	cart = [];
	updateCart();
	notify("Panier vidé", "info");
});

$('form').on('submit', function (e) {
	var form = $(this);

	if(form.hasClass("pizzaForm")){
		addPizzaToCart(form);
		e.preventDefault();
	} else if(form.hasClass("sandwichForm")){
		addSandwichToCart(form);
		e.preventDefault();
	}

	console.log("suvmit");
	
});

