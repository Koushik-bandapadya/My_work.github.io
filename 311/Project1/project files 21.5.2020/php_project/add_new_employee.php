<?php
	
	echo "<head>
    <title>Add Employee</title>
    </head>";
	echo "<form action = 'confirm_add_new_employee.php' method= 'post'>";
	echo "<p>";
		echo "<label for= 'empname'>Employee Name:</label>";
		echo "<input type= 'text' name= 'emp_name' id=empname required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'contact'>Phone Number:</label>";
		echo "<input type= 'text' name= 'contact_no' id=contact required>";
	echo "</p>";
	
	echo "<p>";
		echo "<label for= 'salary'>Salary:</label>";
		echo "<input type= 'text' name= 'slr' id=salary required>";
	echo "</p>";
	
	echo "<label for='authorization'>Is a manager?:</label>";
	echo "<select name='authorization' method= 'post'>";
	echo "<option value='yes'>Yes</option>";
	echo "<option value='no'>No</option>";
	echo "</select>";
	
	echo "<p>";
		echo "<label for= 'dates'>Hire Date:</label>";
		echo "<input type='date' id='dates' name='date' required>";
	echo "</p>";
	
	echo "<input type='submit' value='Add'>";
	
	echo "</form>";


?>