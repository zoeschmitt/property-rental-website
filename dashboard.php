	<?php
		$sql = "SELECT * FROM userregistration WHERE firstName = 'Jane';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['firstName'] . "s Dashboard";
			}
		}

	?>