<?php
echo "<h1> Question One </h1>";
define('EMPLY_CODE', '001');
define('EMPLY_NAME', 'ABC');
define('EMPLY_SAL', '25000');
define('WORK_HRS', '7.5');
echo "Employee code is " . EMPLY_CODE . "<br>";
echo "Employee name is " . EMPLY_NAME . "<br>";
echo "Employee Salary is " . EMPLY_SAL . "<br>";
echo "Working hours is " . WORK_HRS . "<br>";

echo "<h1> Question 2</h1>";
$emply_code = 001;
$emply_name = "ABC";
$emply_sal = 25000;
$work_hrs = 7.5;
echo "Employee code is " . $emply_code . "<br>";
echo "Employee name is " . $emply_name . "<br>";
echo "Employee Salary is " . $emply_sal . "<br>";
echo "Working hours is " . $work_hrs . "<br>";



echo "<h1> Question 4 </h1>";

define("SITE_NAME", "My Awesome Website");  // Declare a constant
echo SITE_NAME;  // Output: My Awesome Website

echo "<h1> Question 5</h1>";
// Setting G.R No. and Name in variables
$gr_no = "12345";
$name = "Claire";

// Displaying G.R No. and Name using echo
echo "G.R No.: " . $gr_no . "</br>";
echo "Name: " . $name . "</br>";

// Displaying G.R No. and Name using print
print "G.R No.: " . $gr_no . "</br>";
print "Name: " . $name . "</br>";
