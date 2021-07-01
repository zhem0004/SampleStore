<!DOCTYPE html>
<html>
<head>
<!-- 
Author: Bohdan Zhemelinskyi

 A page that serves as a template to be filled with the chosen product data  
 -->
   <title>Product</title>
    <link rel="stylesheet" href="css/Product.css">
	<link rel="stylesheet" href="css/Base.css">
	<?php include "script.php"; ?>
</head>
<body>
<!-- Navigation panel   -->
	<div class="navigation_panel">
	 
	    <div id="logo">
            <img src="Emblem.PNG">
        </div>
		<a href="index.php" class="navigation-button">Home</a>
		<a href="Search.php" class="navigation-button">Search Page</a>
		<div>
			<span class="navigation-button">
				<button type="submit">My cart</button>
				<button type="submit">Sign Up</button>
			</span>
		</div>
	</div>
	
	
	<!--  Product desription  -->
	<div class="product">
        <div><img id= "PP-Image" src=""></div>
		
		<div class="description">
			<p>Price <b id = "PP-Price"></b> CND$</p>
			<h3 id = "PP-ProductName-0"></h3>
			<h3 id = "PP-ProductName-1"></h3>
			<h3>AboutProduct"</h3>
			<ul>
				<li><p id = "p0"></p>
				<p id = "p1"></p></li>
				<li><p id = "p2"></p>
				<p id = "p3"></p></li>
				<li><p id = "p4"></p>
				<p id = "p5"></p>
				<p id = "p6"></p></li>
				<li><p id = "p7"></p>
				<p id = "p8"></p>
				<p id = "p9"></p></li>
			</ul>
			<p>Rating: <b id ="PP-Rating"></b></p>
			<p>City: <b id ="PP-City"></b></p>
			<p>Categories: <b id ="PP-Category-Sale"></b><b id ="PP-Category-Green"></b><b id ="PP-Category-Robotic"></b></p>
		</div>
		
		<div class="buttons">
		<label for="number">Quantity</label>
		<input type="number" id = "PP-Quantity" value="1" name="quantity-selector">
		<button type="submit">Add to cart</button>
		</div>
		
    </div>
	
	
</body>

<!--  A call to functions that populate the page with products  -->
<?php
	$query = "SELECT * FROM Product_List;" ;
	populateArray($query);
?>
<script>
// Calling a function that gives access to product list
getProducts(giveProducts());

//Setting the displayed price based on a chosen by user quantity
var money = giveProducts()[sessionStorage.getItem("i")]['price'];

//Calling a function that populates product page
displayProductPage();
quantity();
</script>

</html>