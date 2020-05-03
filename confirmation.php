<!DOCTYPE html>
<html>
<head>
	<title>Reservation Confirmation</title>
</head>
<body>
<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.randform.key.value = randomstring;
}
</script>

<form name="randform" method="POST">
<input type="button" value="Generate Confirmation Key" onClick="randomString();">&nbsp;
<input type="text" name="key" value="">
</form>



	<?php
		include_once 'includes/dbh.php';

		$k = $_POST['key'];
		$in = $_POST['check_in'];
		$out = $_POST['check_out'];

		$sql = "INSERT INTO reservations (reservationNum, address, state, rooms, checkIn, checkOut)
	VALUES ('$k', '$in', '$out');";
	mysqli_query($conn, $sql);
	?>

</body>
</html>

