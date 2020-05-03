<?php
	include_once 'dbh.php';

	$first = $_POST['f_name'];
	$mid = $_POST['mid_name'];
	$last = $_POST['l_name'];
	$email = $_POST['email'];
	$dl = $_POST['DL_num'];
	$state = $_POST['state'];
	$creditCard = $_POST['cc'];
	$cvv = $_POST['cvv'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "INSERT INTO userregistration (firstname, midname, lastname, email, DL, state, creditCard, cvv, username, password)
	VALUES ('$first', '$mid', '$last', '$email', '$dl', '$state', '$creditCard', '$cvv', '$uid', '$pwd');";
	mysqli_query($conn, $sql);

	header("Location: ../success.php?usersignup=success")

?>