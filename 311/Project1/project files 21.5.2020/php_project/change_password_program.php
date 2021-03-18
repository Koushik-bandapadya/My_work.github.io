
<?php

session_start();

//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	
	if (!empty($_SESSION['Username'])) {
    $userid = $_SESSION['Username'];
	}
	
	$pass1 = mysqli_real_escape_string($link, $_REQUEST["password1"]);
	$pass2 = mysqli_real_escape_string($link, $_REQUEST["password2"]);
	
	if(($pass1!=$pass2)){
		echo "Please try again";
		header("location: change_pass_wrong.html");
	}
	if($pass1==""){
		echo "Please try again";
		header("location: change_pass_wrong.html");
	}
	
	elseif($pass1==$pass2){
		
	$sql = "UPDATE login SET password='$pass1' WHERE employee_id=$userid";

	if($result2 = mysqli_query($link, $sql)){
		echo "Password Changed";
		echo"<br>";
		echo"<br>";
		echo "<a href=\"login2.html\">Go to homepage</a>";
		
	}
	else{
		echo "Password could not be updated";
	}

	}
	

	
?>