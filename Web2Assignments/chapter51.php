<!DOCTYPE html>
<html>
<head>
    <title>Calculate Days Lived</title>
</head>
<body>

<form method="POST">
    Enter your age (in years): <input type="number" name="age" required>
    <input type="submit" value="Calculate Days">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input value from the form
    $age = $_POST["age"];
    
    // Calculate total number of days
    $days_lived = $age * 365;

    // Output the result
    echo "You have lived approximately " . $days_lived . " days.";
}
?>

</body>
</html>
