<?php
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$selected_option = mysqli_real_escape_string($link, $_REQUEST["employees"]);
	
	$sql1 = "UPDATE login SET password = '1234' WHERE employee_id = $selected_option";
	
	if($result = mysqli_query($link, $sql1)){
		echo "$selected_option";
		echo " password has been changed to default";
		echo "<br>";
		
		echo "<a href=\"manager_dashboard.html\">Go to dashboard</a>";
		
	}
?>