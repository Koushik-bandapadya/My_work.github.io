<?php

	
session_start();
	
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["cars"]);
	$amount = mysqli_real_escape_string($link, $_REQUEST["quantity"]);
	
	

	$salesid;
	if (!empty($_SESSION['saleID'])) {
    $salesid = $_SESSION['saleID'];
	}
	

	
		$productid;
	
	$sql1 = "SELECT Product_id FROM product WHERE Product_name='$selected_option'"; //sql

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $productid = $row[0];
					 
				 }
			 }
		 }
		 
		// to inventory table
		$stock;
		
		$sql2 = "SELECT current_stock FROM inventory WHERE Product_id='$productid'"; //sql

		if($result = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $stock = $row[0];
					 
				 }
			 }
		 }
	
		//check whether quantity is greater than available stock
		
		if(($amount>$stock) ||($amount==0)){
			echo "<a href=\"add_product_sale.php\">Amount is 0 or more than stock. Please try again</a>";
		}
		else{
			//add the product id and quantity in sales details table
			$sql3 = "INSERT INTO sale_details (sale_id,product_id,quantity) VALUES ('$salesid','$productid', '$amount')";
			if(mysqli_query($link, $sql3)){
				
				
				
				echo "<a href=\"add_product_sale.php\">add more item</a>";
				echo "<br>";
				echo "<br>";
				
				echo "<a href=\"generate_bill.php\">Generate bil</a>";
				echo "<br>";
				
				
			}
		}
		
		
		
		
		
		
		
	
	?>