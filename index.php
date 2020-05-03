<?php
	require "header.php";
?>

<main>

	<?php
		if (isset($_SESSION['userId'])) {
			header("Destination: home.html");

		} else {
			echo You are logged out!;
		}
	?>

</main>