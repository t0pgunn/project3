<?php

$firstname = Trim(stripslashes($_POST['name']));
$lastname = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['message']));

include 'db-info.php';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "INSERT INTO friends (guestname, guestemail, guestmessage)
VALUES ('$name', '$email', '$message')";



$result = mysqli_query($connection, $query);


$NumberOfRowsAffected = mysqli_affected_rows($connection);
if($NumberOfRowsAffected < 1 ) {
 die('No records were written to the database. Waaaa!');
}

mysqli_close($connection);

header("Location: database-read.php");

 ?>
