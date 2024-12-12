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
// Directory for uploads
$uploadDir = "uploads/";

// Check if directory exists, create if not
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true); // Create with appropriate permissions
}

// Handle file upload
$photo = $_FILES['photo'];
$originalName = basename($photo['name']);
$fileInfo = pathinfo($originalName);

// Allowed file types
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
$maxFileSize = 2 * 1024 * 1024; // 2 MB

// Validate file type
if (!in_array(strtolower($fileInfo['extension']), $allowedExtensions)) {
    die("Invalid file type. Only JPG, PNG, and GIF files are allowed.");
}

// Validate file size
if ($photo['size'] > $maxFileSize) {
    die("File size exceeds the 2MB limit.");
}

// Generate unique file name
$uniqueName = uniqid() . '.' . $fileInfo['extension'];
$photoPath = $uploadDir . $uniqueName;

// Move the uploaded file
if (!move_uploaded_file($photo['tmp_name'], $photoPath)) {
    die("Failed to upload photo.");
}

echo "Photo uploaded successfully: " . htmlspecialchars($uniqueName);

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