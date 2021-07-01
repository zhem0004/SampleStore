<!DOCTYPE html>
<html>
<head>
<!--  

Author: Bohdan Zhemelinskyi

A page that is used to search through all products

  -->
    <title>Search</title>
    <link rel="stylesheet"  href="css/Search.css">
	<link rel="stylesheet" href="css/Base.css">
	<?php include "script.php"; ?>
</head>
<body>
<!--  The functionality of the searchbar  -->
<?php
if ( !isset($_POST['SPNP-search'])|| $_POST === Array( 'SPNP-search' => '' )){
	
	$query = "SELECT * FROM Product_List;";
	populateArray($query);
	
		  
}
	if(isset($_POST['SPNP-search'])){
		if($_POST === Array( 'SPNP-search' => '' )){
			$query = "SELECT * FROM Product_List;";
			populateArray($query);
			
		} else{
			$query = "SELECT * FROM Product_List WHERE name0 LIKE '%". $_POST["SPNP-search"] ."%' OR name0 = '';";
			populateArray($query);
			
		}
	}
?>
<!--  Navigation panel  -->
	 <div class="navigation_panel">
	 
	    <div id="logo">
            <img src="Emblem.PNG">
        </div>
	 
		<a href="index.php" class="navigation-button">Home</a>
		<a href="Search.php" class="navigation-button">Search Page</a>
		
		<span class="navigation-button">
		
			<form method="POST" enctype="multipart/form-data">
			<label for="search">Search</label>
			<input type="text" id="SPNP-search" name="SPNP-search" placeholder="Type here..">
			<button type="submit" ><b>Search</b></button>
			<button type="submit" name="SPNP-search" value="" ><b>Reset</b></button>
			</form>
		</span>
		<div>
			<span class="navigation-button">
				<button >My cart</button>
				<button >Sign Up</button>
			</span>
		</div>
	</div>


    <h1 id="page-name">Search</h1>
	
	<!-- Search tools  -->
	
	<div class="search-container">
	
            <div class="white">
                <span class="row">
					<label for="name">by product name</label>
					<input type="text" id="SP-searchbar" name="SP-searchbar" placeholder="Enter product name..">
				</span>
            </div>
            <div class="black">
                <span class="row">
					<label for="SP-Rating">by rating</label>
					<select id= "SP-Rating" name= "SP-Rating">
						<option value = "...">Please select</option>
						<option value = "Ascending">Ascending</option>
						<option value = "Descending">Descending</option>
					</select>
				</span>
            </div>
        
            <div class="black">
                <span class="row">
					<label for="SP-City">by city</label>
					<select id="SP-City" name="SP-City">
						<option value = "...">Please select</option>
						<option value = "Ottawa">Ottawa</option>
						<option value = "Toronto">Toronto</option>
					</select>
				</span>
            </div>
            <div class="white">
                <span class="row">
					<label for="SP-Category">by category</label>
					<select id="SP-Category" name="SP-Category">
						<option value = "...">Please select</option>
						<option value = "What is new">What is new</option>
						<option value = "ON SALE">ON SALE</option>
						<option value = "Robotic toys">Robotic toys</option>
						<option value = "Green toys">Green toys</option>
					</select>
				</span>
            </div>
        
            <div class="white">
                <span class="row">
					<label for="SP-Price">by price</label>
					<select id="SP-Price" name="SP-Price">
						<option value = "...">Please select</option>
						<option value = "Ascending">Ascending</option>
						<option value = "Descending">Descending</option>
						<option value = "ON SALE">ON SALE</option>
					</select>
				</span>
            </div>
            <div class="black">
                <span class="row">
					<button id = "Reset-1" onclick="SPReset()"><b>Reset</b></button>
					<button id = "Sort-1" onclick="reorder()"><b>Sort</b></button>
				</span>
            </div>
	</div>
	
	<!--  Divs that are used to attach products to them  -->
	
	
	<div class="container" id = "Display">

			<div class="white" id = "Display-0"></div>
            <div class="black" id = "Display-1"></div>
            <div class="black" id = "Display-2"></div>
            <div class="white" id = "Display-3"></div>
			<div class="white" id = "Display-4"></div>
            <div class="black" id = "Display-5"></div>
			<div class="white" id = "Display-6"></div>
			<div class="white" id = "Display-7"></div>
            <div class="black" id = "Display-8"></div>
            <div class="black" id = "Display-9"></div>
            <div class="white" id = "Display-10"></div>
			<div class="white" id = "Display-11"></div>
			<div class="white" id = "Display-12"></div>
            <div class="black" id = "Display-13"></div>
            <div class="black" id = "Display-14"></div>
            <div class="white" id = "Display-15"></div>
			<div class="white" id = "Display-16"></div>
            <div class="black" id = "Display-17"></div>
			<div class="white" id = "Display-18"></div>
			<div class="white" id = "Display-19"></div>
            <div class="black" id = "Display-20"></div>
            <div class="black" id = "Display-21"></div>
            <div class="white" id = "Display-22"></div>
			<div class="white" id = "Display-23"></div>
			<div class="white" id = "Display-24"></div>
            <div class="black" id = "Display-25"></div>
            <div class="black" id = "Display-26"></div>
            <div class="white" id = "Display-27"></div>
			<div class="white" id = "Display-28"></div>
            <div class="black" id = "Display-29"></div>
			<div class="white" id = "Display-30"></div>
			<div class="white" id = "Display-31"></div>
            <div class="black" id = "Display-32"></div>
            <div class="black" id = "Display-33"></div>
            <div class="white" id = "Display-34"></div>
			<div class="white" id = "Display-35"></div>
			
	</div>
	
	
	<span class="mail">
			<label for="email">Leave us an e-mail to receive data about latest products</label>
			<input type="email" id="email" name="email" placeholder="Enter your email..">
	</span>
	

</body>
<script>
//A call to function that gives access to product list
	getProducts(giveProducts());
	
	
	//Call to function that innitially displays products from newest to oldest
	displayProducts(newestOrder().length, newestOrder());
</script>

</html>