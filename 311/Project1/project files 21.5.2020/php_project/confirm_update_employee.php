<?php
session_start();
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$empname = mysqli_real_escape_string($link, $_REQUEST["emp_name"]);
	$contactno = mysqli_real_escape_string($link, $_REQUEST["contact_no"]);
	$sal = mysqli_real_escape_string($link, $_REQUEST["salary"]);
	$hiredate = mysqli_real_escape_string($link, $_REQUEST["hire_date"]);
	
	$emp_id;
	if (!empty($_SESSION['empid'])) {
    $emp_id = $_SESSION['empid'];
	}
	
	$sql1 = "UPDATE employee SET Emp_Name='$empname', Contact_no = '$contactno', Salary = $sal, Hire_date = $hiredate WHERE Emp_ID='$emp_id'";
			if($result = mysqli_query($link, $sql1)){
				
				echo "Update done";
				echo "<br>";
				echo "<br>";
				echo "<a href='employee_management_dashboard.html'>Go to Employee management Dashboard</a>";
			}
			
	
?>