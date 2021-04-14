<?php
	echo "<head>
    <title>All employee</title>
    </head>";
	//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$sql1 = "SELECT Emp_Name,Contact_no, Salary, Hire_date FROM employee WHERE 1";
	
	if($result = mysqli_query($link, $sql1)){
		if(mysqli_num_rows($result) > 0){   
	echo "<table style = 'border: 1px solid black;'>";
	echo "<tr>"; 
	echo "<th style = 'border: 1px solid black;'>Employee Name</th>"; 
	echo "<th style = 'border: 1px solid black;'>Contact Number</th>"; 
	echo "<th style = 'border: 1px solid black;'>Salary</th>"; 
	echo "<th style = 'border: 1px solid black;'>Date of Hire</th>";      
	       
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
	echo "<a href='employee_management_dashboard.html'>Go to Employee management Dashboard</a>";
	?>