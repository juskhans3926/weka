<?php
session_start();
include"config.php";


if(empty($_SESSION['login_username'])){

	$result = "";

}else{

$user_check = $_SESSION['login_username'];

// echo $user_check;

$strSQL = "SELECT * FROM users WHERE users_username = '$user_check'";
$objQuery = mysqli_query($conn,$strSQL);
$result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
// $type = $result['users_type'];


//Notice: Undefined variable: result in /Applications/XAMPP/xamppfiles/htdocs/weka/session.php on line 27

if($result['users_type']  == 'ADMIN'){
	$strSQL = "SELECT * FROM admin, users WHERE users.users_username = '$user_check' AND users.users_ID = admin.users_id";
	$objQuery = mysqli_query($conn,$strSQL);
	$result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
}
else if($result['users_type'] == 'DOCTOR'){
	$strSQL = "SELECT * FROM doctor, users WHERE users.users_username = '$user_check' AND users.users_ID = doctor.users_id";
	$objQuery = mysqli_query($conn,$strSQL);
	$result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
}
// else if($result['users_type'] = 'STAFF'){
// 	$strSQL = "SELECT * FROM staff, users WHERE users.users_ID = staff.users_id";
// 	$objQuery = mysqli_query($conn,$strSQL);
// 	$result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
// }
else if($result['users_type'] = 'USER'){
	$strSQL = "SELECT * FROM user_users,users WHERE users.users_username = '$user_check' AND users.users_ID = user_users.users_id";
	$objQuery = mysqli_query($conn,$strSQL);
	$result = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
}

// $login_session = $result["users_firtname"];

// echo $login_session;

// $_SESSION['name'] = $result['users_firstname'];
// $_SESSION['lastname'] = $result['users_lastname'];
// $_SESSION['usersname'] = $result['users_username'];
// $_SESSION['users_type'] = $result['users_type'];


}

// $login_session = $result["users_firtname"];
// echo $result["users_firstname"];

// if(!isset($login_session)){
// 	mysqli_close($conn);
// 	header('Location: login.php');
// }
?>