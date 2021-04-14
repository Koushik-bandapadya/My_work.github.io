<?php
	echo "<head>
    <title>Employee Forgot Password</title>
    </head>";
    //attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$sql1 = "SELECT Emp_ID FROM employee";
	$result = mysqli_query($link, $sql1);
	$row;
	
?>

<?php
		if(mysqli_num_rows($result) > 0){
		
		echo "<form action = 'confirm_change_password.php' method= 'post'>";
		echo "<label for='employees'>Choose an employee to change the password to default password:</label>";

			echo "<select name='employees' method= 'post'>";
			
			
			while($row = mysqli_fetch_array($result)){
			echo "<option value='$row[0]'>$row[0]</option>";
			}
			
			echo "</select>";
			echo "<br>";
			echo "<input type='submit' value='Change Password'>";
			echo "</form>";
			
		}
		
		
	?>