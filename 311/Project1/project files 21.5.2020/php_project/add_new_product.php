<?php
	
	echo "<head>
    <title>Add Product</title>
    </head>";
	
	echo "<h2>Add a new product in inventory</h2>";
	
	echo "<form action = 'confirm_add_new_product.php' method= 'post'>";
	echo "<p>";
		echo "<label for= 'prodname'>Product Name:</label>";
		echo "<input type= 'text' name= 'name' id=prodname required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'price'>Unit Price:</label>";
		echo "<input type= 'text' name= 'unit_price' id=price required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'currentstock'>Current Stock:</label>";
		echo "<input type= 'text' name= 'current_stock' id=currentstock required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'minstock'>Minimum Stock:</label>";
		echo "<input type= 'text' name= 'min_stock' id=minstock required>";
	echo "</p>";
	
	echo "<input type='submit' value='Add'>";
	
	echo "</form>";


?>