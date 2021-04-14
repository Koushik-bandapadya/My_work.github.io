<?php
echo "<head>
    <title>Delete Product</title>
    </head>";
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["products"]);
	
	$prodid;
	$sql1 = "SELECT Product_id FROM product WHERE Product_name='$selected_option'"; //sql
	

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				$prodid = $row[0];
					
				
			 }
		 }
	}
	
	//start delete from 2 tables
	$sql2 = "DELETE FROM product WHERE Product_id=$prodid"; //sql
	if($result = mysqli_query($link, $sql2)){
		
	}
	$sql3 = "DELETE FROM inventory WHERE Product_id=$prodid"; //sql
	if($result = mysqli_query($link, $sql3)){
		echo "product deleted from inventory";
		echo "<br>";
		echo "<br>";
		echo "<a href='inventory_dashboard.html'>Go to Inventory Dashboard</a>";
	}
	
	
?>