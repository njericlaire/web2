<?php 
// Database credentials 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "dbEmployees"; 
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 
// Retrieve form data 
$firstName = mysqli_real_escape_string($conn, $_POST['firstName']); 
$secondName = mysqli_real_escape_string($conn, $_POST['secondName']); 
$dob = $_POST['dob']; 
$gender = $_POST['gender']; 
$maritalStatus = $_POST['maritalStatus']; 
$favoriteColor = isset($_POST['favoriteColor']) ? implode(", ", $_POST['favoriteColor']) : ""; 
$country = $_POST['country']; 
// Handle file upload 
$photo = $_FILES['photo']; 
$photoPath = "uploads/" . basename($photo['name']); 
if (!move_uploaded_file($photo['tmp_name'], $photoPath)) { 
die("Failed to upload photo."); 
} 
// Insert data into MySQL 
$sql = "INSERT INTO tblstaff (firstName, secondName, dob, gender, maritalStatus, 
favoriteColor, photo, country) 
VALUES ('$firstName', '$secondName', '$dob', '$gender', '$maritalStatus', '$favoriteColor', 
'$photoPath', '$country')"; 
if (mysqli_query($conn, $sql)) { 
echo "New employee record created successfully!"; 
} else { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
} 
// Close connection 
mysqli_close($conn); 
?>