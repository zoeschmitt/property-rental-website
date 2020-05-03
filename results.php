<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
</head>
<body>
<?php
include_once 'includes/dbh.php';

$city = $_GET['dest_city'];
$state = $_GET['dest_state'];
$rooms = $_GET['rooms'];


$sql = "SELECT * FROM properties WHERE city = '$city' AND state = '$state' AND rooms = '$rooms'";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){?>
        	<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"/>
<?php
        	echo "<br> <br>";
            echo "Address: " . $row["address"] . "<br> <br>";
            echo $row["city"] . ",  ";
            echo $row["state"] . "    ";
            echo $row["zip"] . "<br> <br>";
            echo "Rooms: " . $row["rooms"] . "<br> <br>"; ?>
            <form action="confirmation.php" method="POST">
            	<table>
						<td>
							Check-in Date :
						</td>
						<td>
							<input type="date" placeholder="dd/mm/yyyy" name="check_in">
						</td>
						<td>
							Check-out Date :
						</td>
						<td>
							<input type="date" placeholder="dd/mm/yyyy" name="check_out">
						</td>
					</table>

						<input type="submit" value="Reserve">
				
            </form>
<?php
			echo "<br> <br> <br> <br> <br> <br> <br> <br>";
        }
 }else{ 

    echo "Image(s) not found..."; 
} 

$conn->close();

?>

</body>
</html>

