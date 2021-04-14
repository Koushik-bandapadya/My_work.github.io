<?php
session_start();

echo "<head>
    <title>Update Product</title>
    </head>";
	
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["products"]);
	
	$prodid;
	$unitprices;
	$currentstocks;
	$minstocks;
	

	
	$sql1 = "SELECT Product_id, Unit_price FROM product WHERE Product_name='$selected_option'"; //sql
	

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				$prodid = $row[0];
				$unitprices = $row[1];				
				
			 }
		 }
	}
		$_SESSION['productid']=$prodid;
	
	
	$sql2  = "SELECT current_stock, minimum_stock FROM inventory WHERE Product_id = '$prodid'";
	

		if($result2 = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result2) > 0){
			 while($row2 = mysqli_fetch_array($result2)){
				$currentstocks = $row2[0];
				$minstocks = $row2[1];				
				
			 }
		 }
	}
	
	
	
	
	echo "<form action = 'confirm_update_product.php' method= 'post'>";
	echo "<p>";
		echo "<label for= 'prodname'>Product Name:</label>";
		echo "<input type= 'text' name= 'name' id=prodname value = '$selected_option' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'price'>Unit Price:</label>";
		echo "<input type= 'text' name= 'unit_price' id=price value = '$unitprices' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'currentstock'>Current Stock:</label>";
		echo "<input type= 'text' name= 'current_stock' id=currentstock value = '$currentstocks' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'minstock'>Minimum Stock:</label>";
		echo "<input type= 'text' name= 'min_stock' id=minstock value = '$minstocks' required>";
	echo "</p>";
	
	echo "<input type='submit' value='UPDATE'>";
	
	echo "</form>";
?>