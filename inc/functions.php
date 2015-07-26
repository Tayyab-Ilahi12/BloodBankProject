<?php 




// $pdo = Database::connect();
// // functions/////

// function sanitize($data) {
// 	return mysql_real_escape_string($data);
// }

// // login

// function E_ID2name ($username) {
// 	$username = sanitize($username);

// 	$res = $pdo->mysql_query("SELECT E_ID FROM employee_info WHERE EMAIL = '$username' ");

// 	var_dump($res);

// 	return (mysql_result($res, 0, `E_ID`));
// }

// function login($username, $password){
// 	$userid = E_ID2name($username);

// 	$username = sanitize($username);
// 	$password = md5($password);

// 	return (mysql_result(mysql_query("SELECT count(`E_ID`) FROM `employee_info` WHERE `EMAIL` = '$username' AND `password` = '$password' "), 0) == 1) ? $userid : false;
// }


// function loginx($username, $password){
// 	$userid = E_ID2name($username);

// 	$username = sanitize($username);
// 	$password = md5($password);

// 	return (mysql_result(mysql_query("SELECT count(`E_ID`) FROM `employee_info` WHERE `EMAIL` = '$username' AND `password` = '$password' "), 0) == 1) ? $userid : false;
// }


// function is_logged() {
// 	return (isset($_SESSION['E_ID'])) ? true : false;
// }

// function user_exists($username) {
// 	$username = sanitize($username);
// 	$query = mysql_query("SELECT COUNT(`E_ID`) FROM `employee_info` WHERE `	E_NAME` = '$username' "  );

// 	return (mysql_result($query, 0) == 1) ? true : false;
// }

// function user_active($username) {
// 	$username = sanitize($username);
// 	$query = mysql_query("SELECT COUNT(`E_ID`) FROM `employee_info` WHERE `	E_NAME` = '$username' AND `user_active` = 1 "  );

// 	return (mysql_result($query, 0) == 1) ? true : false;
// }




?>