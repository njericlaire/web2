<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_students";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data and sanitize inputs
$fn = mysqli_real_escape_string($conn, $_POST["txtfname"]);
$ln = mysqli_real_escape_string($conn, $_POST["txtlname"]);
$gen = mysqli_real_escape_string($conn, $_POST["Gender"]);
$dept = mysqli_real_escape_string($conn, $_POST["txtdepart"]);

// Insert data into the database
$sql = "INSERT INTO tbl_reg (fname, lname, gen, dep) VALUES ('$fn', '$ln', '$gen', '$dept')";

if (mysqli_query($conn, $sql)) {
    echo "Records have been saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
