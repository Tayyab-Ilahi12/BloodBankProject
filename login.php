<?php 
include 'init.php';


//session_start(); // Starting Session
$error=''; // Variable To Store Error Message


// login process
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		die();
	}
	else {
		$connection = mysql_connect("localhost", "root", "");
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		$password = md5($password);
		// Selecting Database
		$db = mysql_select_db("bb", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = (mysql_result(mysql_query("SELECT count(`E_ID`) FROM `employee_info` WHERE `EMAIL` = '$username' AND `E_Pass` = '$password' ", $connection), 0) >= 1) ? true : false;
		//$query = mysql_query("SELECT count(E_ID) FROM employee_info WHERE `EMAIL`= '$username' and `E_Pass` = '$password'", $connection);
		//var_dump($query);
		//$rows = mysql_result($query, 0);
		var_dump($query);
		if ($query == false) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: admin.php"); // Redirecting To Other Page
		} 
		else {
			$error = "Username or Password is invalid";
			echo "Error!";
		}
		mysql_close($connection); // Closing Connection

	}
}

 ?>