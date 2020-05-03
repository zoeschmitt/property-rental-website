<?php
	include_once 'dbh.php';

	$n = basename($_FILES["fileToUpload"]["name"]);
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$rooms = $_POST['rooms'];
	$rate = $_POST['rate'];
	$rating = $_POST['rating'];


	$extensions = $arrayName = array('jpg', 'jpeg', 'png', 'gif');
	$imageFileType = pathinfo($n, PATHINFO_EXTENSION);

	if(isset($_POST["submit"])) {
		if(!empty($_FILES["fileToUpload"]["name"])) {
			if (in_array($imageFileType, $extensions)) {
				$image = $_FILES['fileToUpload']['tmp_name'];
				$imgContent = addslashes(file_get_contents($image));

				$query = ("INSERT INTO properties(image, address, city, state, zip, rooms, rate, rating) VALUES ('$imgContent', '$address', '$city', '$state', '$zip', '$rooms', '$rate', NULL)");

				mysqli_query($conn, $query);

				$querytwo = ("INSERT INTO reservations(address, state, rooms) VALUES ('$address', '$state', '$rooms')");

				mysqli_query($conn, $querytwo);
				
			} else {
				//echo "Sorry, only JPG, JPEG, PNG, & GIF files are all allowed";
			} 
		}else {
				//echo "Please select an image file to upload";
		}
	} 

	header("Location: ../image_test.php?upload=success")
?>