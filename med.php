<html>
<head><title> med.php </title></head>
<body bgcolor="#FFB6C1">
<center>
    <?php
    // Create connection
    $conn = new mysqli('localhost', 'root', '');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // this will select the Database sample_db
    mysqli_select_db($conn, "healthcare");


    $query = "select * from medicine"; // Fetch all the records from the table customer
    $result = mysqli_query($conn, $query);
    ?>

    <h3> MEDICINE DETAILS </h3>

    <table border="1">
        <tr>
            <th> MEDICINE ID</th>
            <th> MEDICINE NAME</th>
            <th> MANUFACTURER</th>
            <th> PRICE</th>
            <th>QUANTITY</th>
            <th> EXPIRY DATE</th>
        </tr>

        <?php while ($array = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $array[0]; ?></td>
                <td><?php echo $array[1]; ?></td>
                <td><?php echo $array[2]; ?></td>
                <td><?php echo $array[3]; ?></td>
                <td><?php echo $array[4]; ?></td>
                <td><?php echo $array[5]; ?></td>
            </tr>
        <?php }
        mysqli_free_result($result);
        mysqli_close($conn); ?>
    </table>
</body>
</html>
<html>
<body>
<button><a href="delete.html">DELETE MEDICINE RECORD</a></button>
<div class="dropdown">
    <button class="dropbtn">UPDATE MEDICINE RECORD

    </button>
    <div class="dropdown-content">
        <a href="up1.html">UPDATE MEDICINE ID</a>
        <a href="up2.html">UPDATE MEDICINE NAME</a>
        <a href="up3.html">UPDATE MANUFACTURER</a>
        <a href="up4.html">UPDATE PRICE</a>
        <a href="up5.html">UPDATE QUANTITY</a>
        <a href="up6.html">UPDATE EXPIRY DATE</a>
    </div>
</div>
</div>
</body>
</html>
