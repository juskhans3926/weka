<?php
	include("config.php");
	

	@$fname = $_POST["firstname"];
	@$lname = $_POST["lastname"];
	@$email = $_POST["email"];
	@$phone = $_POST["phone"];
	@$username = $_POST["txtUsername"];
	@$password = $_POST["txtPassword"];
	@$con_password = $_POST["txtConPassword"];
	@$title    = $_POST["title"];
	@$professional = $_POST["professional"];
	@$special	= $_POST["specialist"];
	@$status	= $_POST["txtStatus"];
	@$hospcode	= $_POST["hospcode"];


	// echo $fname = $_POST["firstname"];
	// echo $lname = $_POST["lastname"];
	// echo $email = $_POST["email"];
	// echo $phone = $_POST["phone"];
	// echo $username = $_POST["txtUsername"];
	// echo $password = $_POST["txtPassword"];
	// echo $con_password = $_POST["txtConPassword"];
	// echo $title    = $_POST["title"];
	// echo $professional = $_POST["professional"];
	// echo $special	= $_POST["specialist"];
	//echo $status	= $_POST["txtStatus"];
	// echo $hospcode	= $_POST["hospcode"];

			$sql = "SELECT * FROM users WHERE users_username = '".$username."' ";
			$query = mysqli_query($conn,$sql);
			$result = mysqli_num_rows($query);

	
	if($result == 1 )
	{
			echo "Username already exists!";
	}
	else
	{	

			$strSQL = "SELECT * FROM users  ORDER BY users_ID DESC limit 1";
			$objQuery = mysqli_query($conn,$strSQL);
			$objResult = mysqli_fetch_array($objQuery);

			$user_id = $objResult['users_ID']+1;
			$users = str_pad($user_id, 10, "0", STR_PAD_LEFT);
			
			


		if($status == 'DOCTOR'){


			$strSQL = "INSERT INTO users (`users_ID`,`users_username`,`users_password`,`users_type`) 
					   VALUES ('".$users."','".$username."','".$password."','".$status."') ";
			$objQuery = mysqli_query($conn,$strSQL);

			$doct = "SELECT * FROM doctor  ORDER BY doct_id DESC limit 1";
			$objQuery = mysqli_query($conn,$doct);
			$objResult = mysqli_fetch_array($objQuery);

			$doct_id = $objResult['doct_id']+1;
			$doct_id_new = str_pad($doct_id, 6, "0", STR_PAD_LEFT);

			 $sql_doct = "INSERT INTO doctor (`doct_id`,`users_id`,`title`,`users_firstname`,`users_lastname`,`professional`,`specialist`,`email`,`hospcode`,`phone`) 
			 	VALUES ('".$doct_id_new."','".$users."','".$title."','".$fname."', '".$lname."','".$professional."','".$special."','".$email."','".$hospcode."','".$phone."')";
			 $objQuery = mysqli_query($conn,$sql_doct);

		
		echo "Register Completed!<br>";		
	
		echo "<br> Go to <a href='index.php'>Login page</a>";

			}else if($status == 'ADMIN'){
				

				$strSQL = "INSERT INTO users (`users_ID`,`users_username`,`users_password`,`users_type`) 
					   VALUES ('".$users."','".$username."','".$password."','".$status."') ";
				$objQuery = mysqli_query($conn,$strSQL);

				$admin = "SELECT * FROM admin  ORDER BY admin_id DESC limit 1";
				$objQuery = mysqli_query($conn,$admin);
				$objResult = mysqli_fetch_array($objQuery);

				$admin_id = $objResult['admin_id']+1;
				$admin_new = str_pad($admin_id, 6, "0", STR_PAD_LEFT);


				$sql_admin = "INSERT INTO admin (`admin_id`,`users_id`,`title`,`users_firstname`,`users_lastname`,`email`,`phone`) VALUES ('".$admin_new."','".$users."','','".$fname."','".$lname."','".$email."','".$phone."') ";

				 $objQuery = mysqli_query($conn,$sql_admin);

		
	 header("Location: backend/www/index.php");		
	
		//echo "<br> Go to <a href='index.php'>Login page</a>";
	}
}


	mysqli_close($conn);
?>