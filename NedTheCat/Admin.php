<!DOCTYPE html>
<html>
<head>
<!--  

Author: Bohdan Zhemelinskyi

This page serves as a form to be filled, and then it sends data to 
"upload.php" page to insert it into the database

  -->
   <title>Admin</title>
    <link rel="stylesheet" href="css/Product.css">
	<link rel="stylesheet" href="css/Base.css">
	<?php include "script.php"; ?>
</head>
<body>
	
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
	
	<div style="text-align: center; width: 100%; background-color:  #2952a3; padding: 15px; color: white;">
	<form action="upload.php" method="POST" enctype="multipart/form-data">
        <div>
			<p><b>Choose Image</b></p>
            <input type="text" name="Picture" style="width: 800px;" placeholder="Type here..">
        </div>
		<div style="text-align: center;">
			<div>
			<p><b>Choose Name</b></p>
			<input type="text" style="width: 300px;" name="Name0" placeholder="Type here..">
			</div>
			<div>
			<input type="text" style="width: 300px;" name="Name1" placeholder="Type here..">
			</div>
			<div>
			<p><b>Choose Price</b></p>
			<input type="text" name="Price" placeholder="Type here..">
			</div>
			<div>
			<p><b>Choose Rating</b></p>
			<input type="text" name="Rating" placeholder="Type here..">
			</div>
			<div>
			<p><b>Choose City</b></p>
			<input type="text" name="City" style="width: 300px;" placeholder="Type here..">
			</div>
			<div>
			<p><b>Choose Description</b></p>
			<p>Point 1</p>
			<input type="text" name="Description0" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description1" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<p>Point 2</p>
			<input type="text" name="Description2" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description3" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<p>Point 3</p>
			<input type="text" name="Description4" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description5" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description6" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<p>Point 4</p>
			<input type="text" name="Description7" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description8" style="width: 500px;" placeholder="Type here..">
			</div>
			<div>
			<input type="text" name="Description9" style="width: 500px;" placeholder="Type here..">
			</div>
			</br>
			<div>
			  <p><b>Green</b></p>
			  <input type="radio" id="Green-y" name="Green" value="1">
			  <label for="Green-y">Yes</label></br>
			  <input type="radio" id="Green-n" name="Green" value="0">
			  <label for="Green-n">No</label><br>  
			</div>
			<div>
			  <p><b>Robotic</b></p>
			  <input type="radio" id="Robotic-y" name="Robotic" value="1">
			  <label for="Robotic-y">Yes</label></br>
			  <input type="radio" id="Robotic-n" name="Robotic" value="0">
			  <label for="Robotic-n">No</label><br>  
			</div>
			<div>
			  <p><b>On SALE</b></p>
			  <input type="radio" id="OnSale-y" name="OnSale" value="1">
			  <label for="OnSale-y">Yes</label></br>
			  <input type="radio" id="OnSale-n" name="OnSale" value="0">
			  <label for="OnSale-n">No</label><br>  
			</div>
			<div>
			<p><b>Click here to upload data to database</b></p>
			<button type="submit">Upload</Submit>
			</div>
		
		</div>
	</form>
    </div>
	
	
</body>

<script>

</script>

</html>