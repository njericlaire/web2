<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data and sanitize inputs
$fn = mysqli_real_escape_string($conn, $_POST["fName"]);
$ln = mysqli_real_escape_string($conn, $_POST["lName"]);
$gen = mysqli_real_escape_string($conn, $_POST["Gender"]);
$telnumber = mysqli_real_escape_string($conn, $_POST["phone"]);
$dob = mysqli_real_escape_string($conn, $_POST["dateOfBirth"]);
$nok = mysqli_real_escape_string($conn, $_POST["kin"]);
$ins = mysqli_real_escape_string($conn, $_POST["Insurance"]);
$medhist = mysqli_real_escape_string($conn, $_POST["medHistory"]);

// Insert data into the database
$sql = "INSERT INTO registration (first_name, last_name,date_of_birth,next_of_kin,incurance_type, gender, medicall_history,telephone) VALUES ('$fn', '$ln', '$dob', '$nok','$ins','$gen','$medhist','$telnumber')";

if (mysqli_query($conn, $sql)) {
    echo "Records have been saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
