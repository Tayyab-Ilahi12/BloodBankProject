<?php

include_once('../init.php');

$name = mysql_real_escape_string($_POST["name"]);
$email = mysql_real_escape_string($_POST["email"]);
$address = mysql_real_escape_string($_POST["address"]);
$phone = mysql_real_escape_string($_POST["phone"]);
$area = mysql_real_escape_string($_POST["area"]);
$group = mysql_real_escape_string($_POST["group"]);
$amount = mysql_real_escape_string($_POST["amount"]);


$query = "INSERT INTO donor_info (DNR_NAME, ADDRESS, AREA, PHONE, EMAIL, BLOOD_GROUP, blood_amount)
        VALUES('$name', '$address', '$area', '$phone', '$email', '$group' ,$amount)";


$result = mysql_query($query, $bd);


if ($result) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $bd->error;
}

header("Location: ../admin.php");
