<!DOCTYPE html>
<html>
<head>
<!--  

Author: Bohdan Zhemelinskyi

A page that is used by website itself to send data to database and provide feedback 
about successfulness of the opperation

  -->
    <title>Upload</title>
</head>
<body>
<div style="text-align: center; width: 100%; background-color: #2952a3; padding: 15px; color: white;" >
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'nedthecat';
$conn = mysqli_connect($server, $user, $password, $db);

$sql = "SELECT COUNT(*) AS Row_num FROM Product_List;" ;
$output = mysqli_query($conn, $sql);
$record = mysqli_fetch_array($output);

$query = "
INSERT INTO `product_list`
(`name0`, `name1`, `num`, `price`, `rating`, `picture`,
 `description0`, `description1`, `description2`, `description3`,
 `description4`, `description5`, `description6`, `description7`,
 `description8`, `description9`, `city`, `onSale`, `robotic`, `green`)
 VALUES 
 (
 '" .$_POST['Name0'] . "',
 '" .$_POST['Name1'] . "',
 " .$record['Row_num'] . ",
 " .$_POST['Price'] . ",
 " .$_POST['Rating'] . ",
 '" .$_POST['Picture'] . "',
 '" .$_POST['Description0'] . "',
 '" .$_POST['Description1'] . "',
 '" .$_POST['Description2'] . "',
 '" .$_POST['Description3'] . "',
 '" .$_POST['Description4'] . "',
 '" .$_POST['Description5'] . "',
 '" .$_POST['Description6'] . "',
 '" .$_POST['Description7'] . "',
 '" .$_POST['Description8'] . "',
 '" .$_POST['Description9'] . "',
 '" .$_POST['City'] . "',
 " .$_POST['OnSale'] . ",
 " .$_POST['Robotic'] . ",
 " .$_POST['Green'] . ");

";
if($conn->query($query) === TRUE ){
	echo "<h2><b>Uploaded values</b></h2>";
	echo '<ul>';
	echo '</br>';
	echo "<li>Name line 1 [ <b>" .$_POST['Name0'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Name line 2 [ <b>" .$_POST['Name1'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Price [ <b>" .$_POST['Price'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>City [ <b>" .$_POST['City'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Rating [ <b>" .$_POST['Rating'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Picture URL [ <b>" .$_POST['Picture'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 1 line 1 [ <b>" .$_POST['Description0'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 1 line 2 [ <b>" .$_POST['Description1'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 2 line 1 [ <b>" .$_POST['Description2'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 2 line 2 [ <b>" .$_POST['Description3'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 3 line 1 [ <b>" .$_POST['Description4'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 3 line 2 [ <b>" .$_POST['Description5'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 3 line 3 [ <b>" .$_POST['Description6'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 4 line 1 [ <b>" .$_POST['Description7'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 4 line 2 [ <b>" .$_POST['Description8'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Description point 4 line 3 [ <b>" .$_POST['Description9'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Green [ <b>" .$_POST['Green'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>Robotic [ <b>" .$_POST['Robotic'] . "</b> ]</li>";
	echo '</br>';
	echo '</br>';
	echo "<li>On SALE [ <b>" .$_POST['OnSale'] . "</b> ]</li>";
	echo '</ul>';
	echo '</br>';
} else {
	echo "<h2><b>Upload failed</b></h2>";
	echo $conn->error;
}
$conn->close();

?>
<button><a href="Admin.php" >Return</a></button>
</div>
</body>
</html>