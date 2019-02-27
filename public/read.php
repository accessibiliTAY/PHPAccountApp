<?php include "templates/header.php";

if (isset($_POST['submit'])) {
	try {
		require "../config.php";
		require "../common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		// select all (*) from the users table, and filter by location.
		$sql = "SELECT *
						FROM users
						WHERE location = :location";
		//put post in a variable
		$location = $_POST['location'];
		//prepare, bind and execute
		$statement = $connection->prepare($sql);
		$statement->bindParam(':location', $location, PDO::PARAM_STR);
		$statement->execute();

		$result = $statement->fetchAll();
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
}

?>
<?php


 ?>



<h2>Find user based on location</h2>

<form method="post">
	<label for="location">Location</label>
	<input type="text" id="location" name="location">
	<input type="submit" name="submit" value="View Results">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>
