<?php

//Include database connection details
include 'init.php';


// login process
//if (empty($_POST) === false) {
//	$username = $_POST['username'];
//	$password = $_POST['password'];
//
//	if (empty($username) === true || empty($password) === true) {
//		die();
//	}
//	else {
//		$connection = mysql_connect("localhost", "root", "");
//		// To protect MySQL injection for Security purpose
//		$username = stripslashes($username);
//		$password = stripslashes($password);
//		$username = mysql_real_escape_string($username);
//		$password = mysql_real_escape_string($password);
//
//		$password = md5($password);
//		// Selecting Database
//		$db = mysql_select_db("bb", $connection);
//		// SQL query to fetch information of registerd users and finds user match.
//		$query = (mysql_result(mysql_query("SELECT count(`E_ID`) FROM `employee_info` WHERE `EMAIL` = '$username' AND `E_Pass` = '$password' ", $connection), 0) >= 1) ? true : false;
//		//$query = mysql_query("SELECT count(E_ID) FROM employee_info WHERE `EMAIL`= '$username' and `E_Pass` = '$password'", $connection);
//		//var_dump($query);
//		//$rows = mysql_result($query, 0);
//		var_dump($query);
//		if ($query == false) {
//			$_SESSION['login_user']=$username; // Initializing Session
//			header("location: admin.php"); // Redirecting To Other Page
//		}
//		else {
//			$error = "Username or Password is invalid";
//			echo "Error!";
//		}
//		mysql_close($connection); // Closing Connection
//
//	}
//}

if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) === true || empty($password) === true) {
        die();
    }

    //Create query
    $qry = "SELECT * FROM employee_info WHERE EMAIL='$username' AND E_Pass='$password'";
    $result = mysql_query($qry);

    var_dump($qry);
    var_dump($result);

    if ($result) {
        if (mysql_num_rows($result) > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysql_fetch_assoc($result);

            $_SESSION['loggedin'] = true;
            $_SESSION['SESS_MEMBER_ID'] = $member['E_ID'];
            $_SESSION['SESS_NAME'] = $member['E_NAME'];
            $_SESSION['SESS_PASS'] = $member['E_Pass'];

            session_write_close();

            header("location: admin.php");
            exit();
        }
        else {
            //Login failed
            $errmsg_arr[] = 'user name and password not found';
            $errflag = true;

            if ($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();

                exit();
            }
        }
    }
    else {
        die("Query failed");
    }
}

 ?>