<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<?php
		if (isset($_SESSION['userId'])) {
			echo '<form action="logout.php" method="post">
		<button type="submit" name="logout-submit">Logout</button>
	</form>';

		} else {
			echo '<form action="user.html">
		<button type="submit">User Login</button>
	</form>';

			echo '<form action="landlord.html">
		<button type="submit">Landlord Login</button>
	</form>';

			echo '<a href="questionnaire.html">New User?</a>';
		}
	?>



</body>
</html>