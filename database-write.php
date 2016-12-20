<?php

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$message = Trim(stripslashes($_POST['message']));

include 'db-info.php';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "INSERT INTO messagelist (guest_name, guest_email, guest_phone, guest_message)
VALUES ('$name', '$email', '$phone', '$message')";



$result = mysqli_query($connection, $query);


$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('Error');
}

mysqli_close($connection);

header("Location: thanks.php");

 ?>
