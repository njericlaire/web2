<!DOCTYPE html>
<html>
<head>
    <title>Calculate Percentage</title>
</head>
<body>

<form method="POST">
    Enter marks for Math (out of 100): <input type="number" name="subject1" max="100" required><br>
    Enter marks for English (out of 100): <input type="number" name="subject2" max="100" required><br>
    Enter marks for Biology (out of 100): <input type="number" name="subject3" max="100" required><br>
    Enter marks for Kiswahili (out of 100): <input type="number" name="subject4" max="100" required><br>
    <input type="submit" value="Calculate Percentage">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $subject1 = $_POST["subject1"];
    $subject2 = $_POST["subject2"];
    $subject3 = $_POST["subject3"];
    $subject4 = $_POST["subject4"];

    // Total marks for 4 subjects
    $total_marks = 400;

    // Calculate obtained marks
    $obtained_marks = $subject1 + $subject2 + $subject3 + $subject4;

    // Calculate percentage
    $percentage = ($obtained_marks * 100) / $total_marks;

    // Output the result
    echo "Your percentage is: " . $percentage . "%";
}
?>

</body>
</html>
