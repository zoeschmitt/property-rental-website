<?php
	include_once 'dbh.php';

	$first = $_POST['f_name'];
	$mid = $_POST['mid_name'];
	$last = $_POST['l_name'];
	$mail = $_POST['mailing'];
	$city = $_POST['city']
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$dl = $_POST['DL_num'];
	$state = $_POST['state'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO landlordregistration (firstname, midname, lastname, mail, city, zip, email, DL, state, username, password)
	VALUES ('$first', '$mid', '$last', '$mail', '$city', '$zip', '$email', '$dl', '$state', '$uid', '$pwd');";
	mysqli_query($conn, $sql);

	header("Location: ../success.php?landlord_signup=success")

?>