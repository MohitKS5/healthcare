<html>
<body>
<?php

// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// this will select the Database sample_db
mysqli_select_db($conn, "healthcare");


// create INSERT query


$sql = "UPDATE medicine SET QTY='$_POST[qty]' WHERE QTY='$_POST[mqty]'";

if ($conn->query($sql) === TRUE) {
    echo " Medicine record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
</body>
</html>