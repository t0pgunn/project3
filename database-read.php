<?php
	// 1. Create a database connection


  include 'db-info.php';

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


	// 2. Perform database query

$query = "SELECT * FROM information";


	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title>Messages</title>
</head>
<body>

	<h1>Messages</h1>

	<table border>


    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>

<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

<tr>
  <td><?php echo $pages["id"]; ?></td>
  <td><?php echo $pages["guestname"]; ?></td>
  <td><?php echo $pages["guestemail"]; ?></td>
  <td><?php echo $pages["guestmessage"]; ?></td>
</tr>


<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
