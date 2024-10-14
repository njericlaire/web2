<?php
    // Retrieving form data using POST method
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student_name = $_POST['student_name'];
        $student_gr_no = $_POST['student_gr_no'];
        $class = $_POST['class'];
        $section = $_POST['section'];

        // Displaying the data
        echo "<h2>Student Information</h2>";
        echo "Name: " . $student_name . "<br>";
        echo "G.R No.: " . $student_gr_no . "<br>";
        echo "Class: " . $class . "<br>";
        echo "Section: " . $section . "<br>";
    }
?>