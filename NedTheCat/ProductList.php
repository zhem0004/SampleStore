<!DOCTYPE html>
<html>
<head>
    <title>ProductList</title>
</head>
<body>
<?php
function populateArray($query){
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'nedthecat';
$conn = mysqli_connect($server, $user, $password, $db);


$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

while($row = $result->fetch_assoc()) {
?>

<script>
	products[<?php  echo $row['num']; ?> - 1] = new Array();
	products[<?php  echo $row['num']; ?> - 1]["name"] = new Array();
	products[<?php  echo $row['num']; ?> - 1]["name"][0] = <?php echo "'" . $row['name0'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["name"][1] = <?php echo "'" . $row['name1'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["num"] = <?php  echo $row['num']; ?> - 1;
	products[<?php  echo $row['num']; ?> - 1]["price"] = <?php  echo $row['price']; ?>;
	products[<?php  echo $row['num']; ?> - 1]["rating"] = <?php  echo $row['rating']; ?>;
	products[<?php  echo $row['num']; ?> - 1]["picture"] = <?php echo "'" . $row['picture'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"] = new Array();
	products[<?php  echo $row['num']; ?> - 1]["description"][0] = <?php echo "'" . $row['description0'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][1] = <?php echo "'" . $row['description1'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][2] = <?php echo "'" . $row['description2'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][3] = <?php echo "'" . $row['description3'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][4] = <?php echo "'" . $row['description4'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][5] = <?php echo "'" . $row['description5'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][6] = <?php echo "'" . $row['description6'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][7] = <?php echo "'" . $row['description7'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][8] = <?php echo "'" . $row['description8'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["description"][9] = <?php echo "'" . $row['description9'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["city"] = <?php echo "'" . $row['city'] . "'"; ?>;
	products[<?php  echo $row['num']; ?> - 1]["onSale"] = <?php  echo $row['onSale']; ?>;
	products[<?php  echo $row['num']; ?> - 1]["robotic"] = <?php  echo $row['robotic']; ?>;
	products[<?php  echo $row['num']; ?> - 1]["green"] = <?php  echo $row['green']; ?>;
</script>
<?php
}
mysqli_close($conn);
}
?>

<script>
function giveProducts(){
	return products;
}
</script>
</body>
</html>