<?php
session_start();
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["employees"]);
	
	$empname;
	$empcontact;
	$empsal;
	$emphiredate;
	
	
	$sql1 = "SELECT Emp_Name, Contact_no,Salary,Hire_date FROM employee WHERE Emp_ID=$selected_option"; //sql
	

		if($result = mysqli_query($link, $sql1)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				$empname = $row[0];
				$empcontact = $row[1];	
				$empsal = $row[2];		
				$emphiredate = $row[3];						
				
			 }
		 }
	}
		$_SESSION['empid']=$selected_option;
		
		echo "<form action = 'confirm_update_employee.php' method= 'post'>";
	echo "<p>";
		echo "<label for= 'empname'>Employee Name:</label>";
		echo "<input type= 'text' name= 'emp_name' id=empname value = '$empname' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'contact'>Contact Number:</label>";
		echo "<input type= 'text' name= 'contact_no' id=contact value = '$empcontact' required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'sal'>Salary:</label>";
		echo "<input type= 'text' name= 'salary' id=sal value = $empsal required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'hiredate'>Date of Hire:</label>";
		echo "<input type= 'text' name= 'hire_date' id=hiredate value = $emphiredate required>";
	echo "</p>";
	
	echo "<input type='submit' value='UPDATE'>";
	
	echo "</form>";

?>