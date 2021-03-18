
<?php
	echo "<head>
    <title>Sale</title>
    </head>";
    //attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	$sql1 = "SELECT Product_name FROM product";
	$result = mysqli_query($link, $sql1);
	$row;
?>	


	<?php
		if(mysqli_num_rows($result) > 0){
		
		echo "<form action = 'populate_dropdown.php' method= 'post'>";
		echo "<label for='cars'>Choose a product:</label>";

			echo "<select name='cars' method= 'post'>";
			
			
			while($row = mysqli_fetch_array($result)){
			echo "<option value='$row[0]'>$row[0]</option>";
			}
			
			echo "</select>";
			echo"<p>";
			echo"<label for= 'userName'>Quantity:</label>";
			echo "<input type= 'text' name= 'quantity' id=userName>";
			echo"</p>";			
			echo "<input type='submit' value='submit'>";
			echo "</form>";
			
		}
		
		
	?>

