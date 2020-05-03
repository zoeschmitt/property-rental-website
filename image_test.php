<?php
    require_once "includes/dbh.php";

    $sql = ("SELECT * FROM properties");

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Properties</title>
</head>
<body>
	<h2>Your listed properties</h2>>
	<br>



<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />

            <?php 
            echo "<br>" . $row['address'] . "     ";
            echo $row['city'] . "    ";
            echo $row['state'] . ",    ";
            echo $row['zip'] . "<br> <br> <br> <br>";
        } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>


</body>
</html>