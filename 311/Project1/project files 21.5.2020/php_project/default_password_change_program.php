
<?php
session_start();
	
echo "<head>
    <title>Login</title>
    </head>";
	
//attempt mysql server conncetion with default setting
	$link = mysqli_connect("localhost", "root", "", "emp_demo_02");
	
	//check connection
	if($link === false){
		die("ERROR: Could not connect".mysqli_connect_error());
	}
	
	$userid = mysqli_real_escape_string($link, $_REQUEST["user_name"]);
	$pass = mysqli_real_escape_string($link, $_REQUEST["password"]);
	
	$_SESSION['Username'] = $userid; 
	
	$foundusername = false;
	
	
	$findusername = "SELECT employee_id FROM login WHERE 1"; //sql

		if($result = mysqli_query($link, $findusername)){
		 if(mysqli_num_rows($result) > 0){
			 while($row = mysqli_fetch_array($result)){
				 
				 if($row[0]==$userid){
					 $foundusername = true;
					 
				 }
			 }
		 }
	}
	

	if($foundusername){
		//1
		
		//check password is default "1234"
		$sql = "SELECT password FROM login WHERE employee_id = '$userid' AND password='$pass'" ;
		
		if($result2 = mysqli_query($link, $sql)){
			//2
				
			//$value = mysqli_num_rows($result2);
		    if(mysqli_num_rows($result2) > 0){
				//3
				if($pass=="1234"){
					//4
					 echo "please change the default password";
					 echo "<br>";
					 echo "<br>";
					 echo "<a href=\"change_pass.html\">Go to change password</a>";
				}//4
				else{
					//5
					$sql2 = "SELECT authorization FROM manager_authorization WHERE employee_id = '$userid'" ;
		
					if($result3 = mysqli_query($link, $sql2)){
						//6
							
						//$value = mysqli_num_rows($result3);
						if(mysqli_num_rows($result3) > 0){
							//7
							while($row4 = mysqli_fetch_array($result3)){
								//8
							if($row4[authorization]=="yes"){
								//9
							header("location:manager_dashboard.html");
							return;
							}//9
						elseif($row4[authorization]=="no"){
							//10
							header("location:employee_dashboard.html");
							return;
						}//10
					}//8
						}//7
				}//6
				}//5
		 }//3
		 else{
			 echo "password don't match";
			 echo "<br>";
			 echo "<br>";
			 echo "<a href=\"login2.html\">Go to homepage</a>";
		 }	
		
	}
	//2
	}
	//1
	
	else{
		echo "user ID not found";
		echo "<br>";
		echo "<br>";
		echo "<a href=\"login2.html\">Go to homepage</a>";
	}
	
	

	
?>