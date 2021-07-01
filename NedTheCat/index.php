
<!DOCTYPE html>
<html>
<head>
<!--  
Author: Bohdan Zhemelinskyi

This is a the main page of the website
It contains some basic information and newest products

  -->
    <title>HOME</title>
    <link rel="stylesheet" href="css/Landing.css">
	<link rel="stylesheet" href="css/Base.css">
	<?php include "script.php"; ?>
</head>
<body>
	<!--  Navigation panel  -->
	 <div class="navigation_panel">
	 
	    <div id="logo">
            <img src="Emblem.PNG">
        </div>
	 
		<a href="index.php" class="navigation-button">Home</a>
		<a href="Search.php" class="navigation-button">Search Page</a>
		
		<div>
			<span class="navigation-button">
				<label for="search">Search</label>
				<input type="text" id="LPNP-search" name="LPNP-search" placeholder="Type here..">
				<button onclick ="searchBar('LPNP-search')"><b>Search</b></button>
			</span>
			<span class="navigation-button">
				<button id = "LPNP-Reset" onclick="LPReset()"><b>Reset</b></button>
				<button type="submit">My cart</button>
				<button type="submit">Sign Up</button>
			</span>
		</div>
	</div>
	
	<h3 id="logo-name">
		"Ned the cat" Ottawa's toy store for pets
	</h3>
	
	<!--  Heading  -->
	<h3 id="featured">
		Featured products
	</h3>

<!--  List of divs to that will contain product descriptions inserted by JS  -->
<div class="container">
       
			<div class="white" id = "Display-0"></div>
            <div class="black" id = "Display-1"></div>
            <div class="black" id = "Display-2"></div>
            <div class="white" id = "Display-3"></div>
			<div class="white" id = "Display-4"></div>
            <div class="black" id = "Display-5"></div>
			<div class="white" id = "Display-6"></div>
	   
</div>

</body>

<!--  A call to functions that populate the page with products  -->
<?php
	$query = "SELECT * FROM Product_List;" ;
	populateArray($query);
?>

<script>
//A call to function that allows accessing products
getProducts(giveProducts());

//A function that makes arranges products in order by newest
displayProducts(6, newestOrder());
</script>
</html>
