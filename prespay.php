<html>
<head><title> pat.php </title></head>
<body bgcolor="#FFB6C1">
<center>
<?php
 // Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// this will select the Database sample_db
mysqli_select_db($conn,"healthcare");
 

$query="select * from prescription"; 
$result=mysqli_query($conn,$query);
?>
 
<h3> PRESCRIPTION DETAILS </h3>
 
<table border="1">
<tr>
<th> PRESCRIPTION ID </th>
<th> MEDICINE QUANTITY </th>
<th> DOCTOR ID</th>
<th> PATIENT NAME </th>
 <th>MEDICINE NAME</th> 
 </tr>
 
<?php while($array=mysqli_fetch_row($result)){?>
<tr>
<td><?php echo $array[0];?></td>
<td><?php echo $array[1];?></td>
<td><?php echo $array[2];?></td>
<td><?php echo $array[3];?></td>
<td><?php echo $array[4];?></td>
</tr>


<?php }
 mysqli_free_result($result);
 mysqli_close($conn); ?>
</table>
</body>
</html>
<html>
<body>
<a href="payin.html">PROCEED TO PAY</a>
</body>
</html>
