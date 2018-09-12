<?php
	include("config.php");
	
session_start();

	@$fname = $_POST["firstname"];
	@$lname = $_POST["lastname"];
	@$email = $_POST["email"];
	@$phone = $_POST["phone"];
	@$username = $_POST["txtUsername"];
	@$password = $_POST["txtPassword"];
	@$con_password = $_POST["txtConPassword"];


			$sql = "SELECT * FROM users WHERE users_username = '".$username."' ";
			$query = mysqli_query($conn,$sql);
			$result = mysqli_num_rows($query);

if($_POST['captcha'] == $_SESSION['captcha']){

	if($result == 1 )
	{
			// echo "Username already exists!";
			echo  "<body onload=\"window.alert('Username already exists'); return history.back();\">";
			
	}
	else
	{	
		$strSQL = "SELECT * FROM users  ORDER BY users_ID DESC limit 1";
		$objQuery = mysqli_query($conn,$strSQL);
		$objResult = mysqli_fetch_array($objQuery);

		$user_id = $objResult['users_ID']+1;
		$pt_new_id = str_pad($user_id, 10, "0", STR_PAD_LEFT);
		$pt_new_id2 = str_pad($user_id, 5, "0", STR_PAD_LEFT);
		// echo $pt_new_id2;
		
		$strSQL = "INSERT INTO users (`users_ID`,`users_username`,`users_password`,`users_type`) 
				   VALUES ('".$pt_new_id."','".$username."','".$password."','USER') ";
		$objQuery = mysqli_query($conn,$strSQL);

		 $strSQL = "INSERT INTO user_users (`user_users_id`,`users_id`,`users_firstname`,`users_lastname`,`email`,`phone`) VALUES ('".$pt_new_id2."','".$pt_new_id."','".$_POST["firstname"]."', 
		 '".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."')";
		 $objQuery = mysqli_query($conn,$strSQL);

		
		echo  "<body onload=\"window.alert('การสมัครสมาชิกสำเร็จ'); window.location.href = 'login.php';\">";
   	    
		// echo "<body onload=\"window.alert('การสมัครสมาชิกสำเร็จ'); return history.back(login.php);\">";
	}
} else{

	echo "<body onload=\"window.alert('captcha PIN is invalid'); return history.back();\">";
}

	mysqli_close($conn);
?>