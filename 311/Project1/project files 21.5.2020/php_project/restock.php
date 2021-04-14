<?php
	echo "<head>
    <title>Restock Message</title>
    </head>";
	
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	echo "<h1>These products need restock because they have less than minimum stock</h1>";
	echo "<br>";
	
	$sql = "SELECT Product_name, Unit_price, current_stock, minimum_stock FROM product,inventory WHERE product.Product_id = inventory.Product_id AND current_stock<minimum_stock";
	
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){  
			
	echo "<table style = 'border: 1px solid black;'>";
	echo "<tr>"; 
	echo "<th style = 'border: 1px solid black;'>Product Name</th>"; 
	echo "<th style = 'border: 1px solid black;'>Unit Price</th>";      
	echo "<th style = 'border: 1px solid black;'>Current Stock</th>";            
	echo "<th style = 'border: 1px solid black;'>Minimum Stock</th>";        
	echo "</tr>";   
	while($row = mysqli_fetch_array($result)){    
	echo "<tr>";   
	echo "<td style = 'border: 1px solid black;'>" . $row[0] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row[1] . "</td>";       
	echo "<td style = 'border: 1px solid black;'>" . $row[2] . "</td>";     
	echo "<td style = 'border: 1px solid black;'>" . $row[3] . "</td>";   
	echo "</tr>";   
		
	}       
	echo "</table>"; 
		}
	}
	
	echo "<br>";
	echo "<br>";
	echo "<a href='inventory_dashboard.html'>Go to Inventory Dashboard</a>";
	
	
	
?>