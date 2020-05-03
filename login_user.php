<?php

if (isset($_POST['userlogin-submit'])) {
	require 'includes/dbh.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM userregistration WHERE uid= '$uid';";
	$stmt = mysqli_stmt_init($conn);

	mysqli_stmt_bind_param($stmt, "s", $uid);
	mysqli_stmt_execute($stmt);
	$result = sqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc()) {
		$pwdCheck = password_verify($pwd, $row['password']);
		if($pwdCheck == false){
			header("Location: index.php?error=wrongpwd");
			exit();
		}
		else if($pwdCheck == true) {
			session_start();
			$_SESSION['userId'] = $row['id'];
			$_SESSION['userFName'] = $row['firstName'];

			header("Location: home.php?login_user=success");
			exit();
		}
		else {
			header("Location: index.php?error=wrongpwd");
			exit();			
		}
	}
} else {
	header("Location: index.php?login=nouser");
}

