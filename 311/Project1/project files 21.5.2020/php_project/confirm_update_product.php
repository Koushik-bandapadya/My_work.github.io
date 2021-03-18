<?php
session_start();
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$name = mysqli_real_escape_string($link, $_REQUEST["name"]);
	$uniprice = mysqli_real_escape_string($link, $_REQUEST["unit_price"]);
	$currstock = mysqli_real_escape_string($link, $_REQUEST["current_stock"]);
	$minstock = mysqli_real_escape_string($link, $_REQUEST["min_stock"]);
	
	$prodid;
	if (!empty($_SESSION['productid'])) {
    $prodid = $_SESSION['productid'];
	}
	
	$sql1 = "UPDATE product SET Product_name='$name', Unit_price = '$uniprice' WHERE Product_id=$prodid";
			if($result = mysqli_query($link, $sql1)){
				
				//echo "done";
			}
			$sql2 = "UPDATE inventory SET current_stock='$currstock', minimum_stock = '$minstock' WHERE Product_id=$prodid";
			if($result = mysqli_query($link, $sql2)){
				
				echo "Product Successfully Updated";
				echo "<br>";
				echo "<br>";
				echo "<a href='inventory_dashboard.html'>Go to inventory Dashboard</a>";
			}
	
?>