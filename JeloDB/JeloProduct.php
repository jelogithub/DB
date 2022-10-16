<?php
	include("db.php");

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" />
	<title>Products</title>
</head>
<body>

<?php
require('db.php');
if(isset($_REQUEST['products'])){
	$ProductID = stripcslashes($_REQUEST['ProductID']);
	$ProductID = mysql_real_escape_string(@conn,ProductID);
	$ProductName = stripcslashes($_REQUEST['ProductName']);
	$ProductName = mysql_real_escape_string(@conn,ProductName);
	$SupplierID = stripcslashes($_REQUEST['SupplierID']);
	$SupplierID = mysql_real_escape_string(@conn,SupplierID);
	$CategoryID = stripcslashes($_REQUEST['CategoryID']);
	$CategoryID = mysql_real_escape_string(@conn,CategoryID);
	$QuantityPerUnit = stripcslashes($_REQUEST['QuantityPerUnit']);
	$QuantityPerUnit = mysql_real_escape_string(@conn,QuantityPerUnit);
	$UnitPrice = stripcslashes($_REQUEST['UnitPrice']);
	$UnitPrice = mysql_real_escape_string(@con,UnitPrice);
	$UnitsInStock = stripcslashes($_REQUEST['UnitsInStock']);
	$UnitsInStock = mysql_real_escape_string(@conn,UnitsInStock);
	$UnitsOnOrder = stripcslashes($_REQUEST['UnitsOnOrder']);
	$UnitsOnOrder = mysql_real_escape_string(@conn,UnitsOnOrder);
	$ReorderLevel = stripcslashes($_REQUEST['ReorderLevel']);
	$ReorderLevel = mysql_real_escape_string(@conn,ReorderLevel);
	$Discontinued = stripcslashes($_REQUEST['Discontinued']);
	$Discontinued = mysql_real_escape_string(@conn,Discontinued);

$query = "INSERT into `products` (ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued) VALUES (`$ProductName`, `$SupplierID`, `$CategoryID`, `$QuantityPerUnit`, `$UnitPrice`, `$UnitsInStock`, `$UnitsOnOrder`, `$ReorderLevel`, `$Discontinued`)";
$result = mysqli_query($conn,$query);
if($result){
	echo "<div class='form'><h3>Insert Successful.</h3><br/>Click here to <a href='login.php'>Submit</a></div>";
}

}else{
	?>
	<div class="form">
		<h1>Products</h1>
		<form name="products" action="" method="post">
			<input type="text" name="ProductID" placeholder="ProductID" required />
			<input type="text" name="SupplierID" placeholder="SupplierID" required />
			<input type="text" name="CategoryID" placeholder="CategoryID" required />
			<input type="text" name="QuantityPerUnit" placeholder="QuantityPerUnit" required />
			<input type="text" name="UnitPrice" placeholder="UnitPrice" required />
			<input type="text" name="UnitsInStock" placeholder="UnitsInStock" required />
			<input type="text" name="UnitsOnOrder" placeholder="UnitsOnOrder" required />
			<input type="text" name="ReorderLevel" placeholder="ReorderLevel" required />
			<input type="text" name="Discontnued" placeholder="Discontnued" required />
			<input type="submit" name="Submit" value="Register"> />
		</form>
		<br /></br />
	</div>

<?php }?>
</body>
</html>

