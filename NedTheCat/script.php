<!DOCTYPE html>
<html>
<head>
    <title>Script</title>
	<?php include "ProductList.php"; ?>
</head>
<body>
<script>

var products = new Array();
var i = 0;
var lastDisplayedProducts = 0;

var products = new Array();

function getProducts(list){
	products = list;
}

function choice(x){
  sessionStorage.setItem("i", x);
}

function newestOrder(){
	var newestOrder = new Array();
	for( var k= products.length; k > 0; k--){
		newestOrder[products.length-k] = k-1;
	};
	return newestOrder;
}


function search(someText){
	var not = -1;
	var orderBySearch = new Array();
	
	for( var h = 0; h < products.length; h++){
		if(products[h]["name"][0].search(someText) >= 0 || products[h]["name"][1].search(someText) >= 0){
		orderBySearch[orderBySearch.length] = products[h]["num"];
		}
	};
	return orderBySearch;
}

function orderByRatingAscending(){
	
	var orderByRating = new Array();
		
	for( var r= 5; r >= 1; r--){
			
		for( var r1= 0; r1 < products.length; r1++){
			
			if(products[r1]["rating"] == r){
				orderByRating.push(r1);
			}
			
		};
	};
	return orderByRating;
	
}

function orderByRatingDescending(){
	
	var orderByRating = new Array();
		
	for( var r= 1; r <= 5; r++){
			
		for( var r1= 0; r1 < products.length; r1++){
			
			if(products[r1]["rating"] == r){
				orderByRating.push(r1);
			}
			
		};
	};
	return orderByRating;
	
}

function orderByPriceDescending(){
	
	var orderByPrice = new Array();
	
	var clone = new Array();
	
	for( var p= 0; p < products.length; p++){
		
		clone[p] = new Array();	
		clone[p][0] = products[p]["num"];
		clone[p][1] = products[p]["price"];
		
	};
	
	clone.sort((a,b) => a[1] - b[1]);
	
	for( var p1= 0; p1 < products.length; p1++){
		
		orderByPrice[p1] = clone[p1][0];
		
	};
	
	return orderByPrice;
	
}

function orderByPriceAscending(){
	
	var orderByPrice = new Array();
	
	var clone = new Array();
	
	for( var p= 0; p < products.length; p++){
		
		clone[p] = new Array();	
		clone[p][0] = products[p]["num"];
		clone[p][1] = products[p]["price"];
		
	};
	
	clone.sort((a,b) => b[1] - a[1]);
	
	for( var p1= 0; p1 < products.length; p1++){
		
		orderByPrice[p1] = clone[p1][0];
		
	};
	
	return orderByPrice;
	
}


function orderBySale(){
	
	var orderBySale = new Array();
	
	for( var s = 0; s < products.length; s++){
		if(products[s]["onSale"] == 1){
		orderBySale[orderBySale.length] = s;
		}
	};
	
	return orderBySale;
}

function orderByGreen(){
	
	var orderByGreen = new Array();
	
	for( var s = 0; s < products.length; s++){
		if(products[s]["green"] == 1){
		orderByGreen[orderByGreen.length] = s;
		}
	};
	
	return orderByGreen;
}

function orderByRobotic(){
	
	var orderByRobotic = new Array();
	
	for( var s = 0; s < products.length; s++){
		if(products[s]["robotic"] == 1){
		orderByRobotic[orderByRobotic.length] = s;
		}
	};
	
	return orderByRobotic;
}

function orderByCity(city){
	
	var orderByCity = new Array();
	
	for( var s = 0; s < products.length; s++){
		if(products[s]["city"] == city){
		orderByCity[orderByCity.length] = s;
		}
	};
	return orderByCity;
}


function displayProductPage(){
	i = sessionStorage.getItem("i");
	document.getElementById("PP-Price").innerHTML = money;
	document.getElementById("PP-ProductName-0").innerHTML = products[i]["name"][0];
	document.getElementById("PP-ProductName-1").innerHTML = products[i]["name"][1];
	document.getElementById("p0").innerHTML = products[i]["description"][0];
	document.getElementById("p1").innerHTML = products[i]["description"][1];
	document.getElementById("p2").innerHTML = products[i]["description"][2];
	document.getElementById("p3").innerHTML = products[i]["description"][3];
	document.getElementById("p4").innerHTML = products[i]["description"][4];
	document.getElementById("p5").innerHTML = products[i]["description"][5];
	document.getElementById("p6").innerHTML = products[i]["description"][6];
	document.getElementById("p7").innerHTML = products[i]["description"][7];
	document.getElementById("p8").innerHTML = products[i]["description"][8];
	document.getElementById("p9").innerHTML = products[i]["description"][9];
	document.getElementById("PP-Rating").innerHTML = products[i]["rating"];
	document.getElementById("PP-City").innerHTML = products[i]["city"];
	
	if(products[i]["onSale"] == true){
	document.getElementById("PP-Category-Sale").innerHTML = "ON SALE";
	}
	if(products[i]["green"] == true && products[i]["onSale"] == true){
		document.getElementById("PP-Category-Green").innerHTML = ", Green";
	}else if(products[i]["green"] == true){
		document.getElementById("PP-Category-Green").innerHTML = "Green";
	}
	if(products[i]["robotic"] == true && (products[i]["onSale"] == true || products[i]["green"] == true)){
		document.getElementById("PP-Category-Robotic").innerHTML = ", Robotic";
	}else if(products[i]["robotic"] == true){
		document.getElementById("PP-Category-Robotic").innerHTML = "Robotic";
	}
	
	document.querySelector("#PP-Image").src = products[i]["picture"];
}

function quantity(){
	
	document.getElementById("PP-Quantity").addEventListener('click', event => {
			
		var theNumberOfProductsChosen = event.target.value;
	
		if(theNumberOfProductsChosen == ""){
			theNumberOfProductsChosen = 1;
		}
		
		var expression = products[i]["price"] + " * " + theNumberOfProductsChosen
		
		money = eval(expression);
		
		displayProductPage();
			
			} )
}


function displayProducts(toDisplay, order){
	
	if(lastDisplayedProducts != 0){
		
		for( var j= 0; j < lastDisplayedProducts; j++){
				
			var idForTemporaryElement = 'display-' + j;
			var item = document.getElementById(idForTemporaryElement);
			item.parentNode.removeChild(item);
		
		};

	}
	
	lastDisplayedProducts = toDisplay;
	
	for( var j= 0; j < toDisplay; j++){
	var idForElement = "Display-" + j;
	o = order[j];
	if (products[o]){
	block_to_insert = document.createElement( 'div' );
	block_to_insert.id = 'display-' + j ;
	block_to_insert.innerHTML = 
	'<div><img id="Pic-' + j + '" src=""></div>'+
	'<div class="description">'+
	'<p class="price">Price: CND$ <b id="price-' + j + '"></b></p>'+
	'<p id="name1-' + j + '"></p>'+
	'<p id="name2-' + j + '"></p>'+
	'<p>Rating: <b id="rating-' + j + '"></b></p>'+
	'<button><a href="Product.php" onclick="choice('+ order[j] + ')">View Product</a></button>'+
	'</div>';
	container_block = document.getElementById( idForElement );
	container_block.appendChild( block_to_insert );
		
	var price = "price-";
	var name1 = "name1-";
	var name2 = "name2-";
	var rating = "rating-";
	var pic = "#Pic-";
		
	price = price + j;
	name1 = name1 + j;
	name2 = name2 + j;
	rating = rating + j;
	pic = pic + j;
		
	document.getElementById(price).innerHTML = products[o]["price"];
	document.getElementById(name1).innerHTML = products[o]["name"][0];
	document.getElementById(name2).innerHTML = products[o]["name"][1];
	document.getElementById(rating).innerHTML = products[o]["rating"];
	document.querySelector(pic).src = products[o]["picture"];
	}
	
	}
}

function SPReset(){
	displayProducts(newestOrder().length, newestOrder());
}

function LPReset(){
	displayProducts(6, newestOrder());
}

function searchBar(barId){
	
	
	let someText = document.getElementById(barId).value;
	displayProducts(search(someText).length, search(someText));
	
}

function reorder(){
	
	if(document.querySelector("#SP-Rating").value == "Ascending"){
		displayProducts(orderByRatingAscending().length, orderByRatingAscending());
	}if(document.querySelector("#SP-Rating").value == "Descending"){
		displayProducts(orderByRatingDescending().length, orderByRatingDescending());
	}
	
	if(document.querySelector("#SP-Category").value == "What is new"){
		displayProducts(newestOrder().length, newestOrder());
	}if(document.querySelector("#SP-Category").value == "ON SALE"){
		displayProducts(orderBySale().length, orderBySale());
	}if(document.querySelector("#SP-Category").value == "Robotic toys"){
		displayProducts(orderByRobotic().length, orderByRobotic());
	}if(document.querySelector("#SP-Category").value == "Green toys"){
		displayProducts(orderByGreen().length, orderByGreen());
	}
	
	if(document.querySelector("#SP-City").value == "Ottawa"){
		displayProducts(orderByCity("Ottawa").length, orderByCity("Ottawa"));
	}if(document.querySelector("#SP-City").value == "Toronto"){
		displayProducts(orderByCity("Toronto").length, orderByCity("Toronto"));
	}
	
	if(document.querySelector("#SP-Price").value == "Ascending"){
		displayProducts(orderByPriceAscending().length, orderByPriceAscending());
	}if(document.querySelector("#SP-Price").value == "Descending"){
		displayProducts(orderByPriceDescending().length, orderByPriceDescending());
	}if(document.querySelector("#SP-Price").value == "ON SALE"){
		displayProducts(orderBySale().length, orderBySale());
	}
	
	if(document.querySelector("#SP-searchbar").value != ""){
		searchBar('SP-searchbar');
	}
}
</script>
</body>

</html>