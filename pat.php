<html>
<head><title> pat.php </title></head>
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


    $query = "select * from patient";
    $result = mysqli_query($conn, $query);
    ?>

    <h3> PATIENT DETAILS </h3>

    <table border="1">
        <tr>
            <th> PATIENT ID</th>
            <th> PATIENT NAME</th>
            <th> GENDER</th>
            <th> AGE</th>
            <th>PHONE</th>
        </tr>

        <?php while ($array = mysqli_fetch_row($result)) { ?>
            <tr>
                <td><?php echo $array[0]; ?></td>
                <td><?php echo $array[1]; ?></td>
                <td><?php echo $array[2]; ?></td>
                <td><?php echo $array[3]; ?></td>
                <td><?php echo $array[4]; ?></td>
            </tr>
        <?php }
        mysqli_free_result($result);
        mysqli_close($conn); ?>
    </table>
</body>
</html>
<html>
<body>
<button><a href="delete1.html">DELETE PATIENT RECORD</a></button>
<div class="dropdown">
    <button class="dropbtn">UPDATE PATIENT RECORD

    </button>
    <div class="dropdown-content">
        <a href="upp1.html">UPDATE PATIENT ID</a>
        <a href="upp2.html">UPDATE PATIENT NAME</a>
        <a href="upp3.html">UPDATE GENDER</a>
        <a href="upp4.html">UPDATE AGE</a>
        <a href="upp5.html">UPDATE PHONE</a>

    </div>
</div>
</div>

</body>
</html>
