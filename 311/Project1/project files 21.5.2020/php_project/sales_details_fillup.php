
<?php
session_start();
	echo "<head>
    <title>Sale</title>
    </head>";
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	if (!empty($_SESSION['Username'])) {
    $soldby = $_SESSION['Username'];
	}
	
	//$soldby = mysqli_real_escape_string($link, $_REQUEST["sold_by"]);
	$dateofsale = mysqli_real_escape_string($link, $_REQUEST["date"]);
	$custname = mysqli_real_escape_string($link, $_REQUEST["customer_name"]);
	$custphn = mysqli_real_escape_string($link, $_REQUEST["phone_number"]);
	
	
	//echo "all done";
	
	//customer table update
	
	//customer id
	$custid;
	
	$sql0 = "SELECT customer_id FROM customer WHERE customer_name= '$custname' AND phone = '$custphn'";
	$result = mysqli_query($link, $sql0);
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 $custid = $row[0];
				 echo "found same customer";
				 echo "<br>";
				
			 }
		 }
	
	
	else{
	$sql1 = "INSERT INTO customer (customer_name, phone) VALUES ('$custname', '$custphn')";
	
	if(mysqli_query($link,$sql1)){
		echo "<br>";
		echo "Customer Record Taken";
		echo "<br>";
	}
	else{
		echo "ERROR: could not able to execute";
	}
	
	//customer id
	//$custid;
	
	$sql2 = " SELECT LAST_INSERT_ID() FROM customer";
	
	if($result = mysqli_query($link, $sql2)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $custid = $row[0];
			 }
		 }
	}
	}
	
	//sales table update
	$sql3 = "INSERT INTO sale (Sale_date,Sold_by,Customer_id) VALUES ('$dateofsale', '$soldby','$custid')";
	
	
	if(mysqli_query($link,$sql3)){
		echo "<br>";
		//echo "Sale table record taken";
		echo "<br>";
	}
	else{
		echo "ERROR: could not able to execute";
	}
	
	//sales id
	
	$saleid;
	
	$sql4 = " SELECT LAST_INSERT_ID() FROM sale";
	
	if($result = mysqli_query($link, $sql4)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 $saleid = $row[0];
			 }
		 }
	}
	//echo $saleid;
	echo "<br>";
	
	echo "<a href='add_product_sale.php'>Proceed to make sale</a>";
	
	$_SESSION['saleID'] = $saleid; 
	
	
?>