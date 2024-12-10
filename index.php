<?php
$name = "Claire Njeri";
$age = 18;
$sales = 20000000;

echo $name;
echo "</br>";
echo $age;
echo "</br>";

# Fixing the order of operations for string concatenation
echo "Claire Njeri's age after 5 years is " . ($age + 5) . " years old </br>";

# Order of precedence
echo "The result is " . ((2 + 2) * 2);
echo "</br>";

$y = 2;
$z = 5;
$a = 2;
$res = ($y + $z * $a / $z - $y);
echo "The result is " . $res;
# PEDMAS order of calculation in programming
echo "</br>";
$res2 = ($y + $z * $a / $z - $y) / 2;
echo "The result is " . $res2;
echo "</br>";
echo "...................................................................................</br>";

# RELATIONAL OPERATORS
if ($age > 18)
    echo $name . " is an adult";
else
    echo $name . " is a child";

echo "</br>";

# COMMISSION CALCULATION
if ($sales >= 2000000)
    $comm = $sales * 0.01;
else
    $comm = 0;

echo "Commission: " . $comm;
echo "</br>";

# SUBJECT SCORES
$Math = 55;
$Eng = 66;
$Swa = 45;
$phy = 50;
$bio = 60;

echo "</br>";
echo "Student Name: " . $name . "</br>";
echo "Subject Scores:</br>";
echo "Mathematics: " . $Math . "</br>";
echo "English: " . $Eng . "</br>";
echo "Swahili: " . $Swa . "</br>";
echo "Physics: " . $phy . "</br>";
echo "Biology: " . $bio . "</br>";

# CALCULATING TOTAL AND AVERAGE
$total = ($Math + $Eng + $Swa + $phy + $bio);
echo "The total score is: " . $total . "</br>";

$average = $total / 5;
echo "Your average is: " . $average . "</br>";
if ($average > 50)
    echo "It is a Pass";
else
    echo "It is a Fail";
echo "<br>";
if ($average >= 80)
    echo "A";
elseif ($average >= 70)
    echo "B";
elseif ($average >= 60)
    echo "C";
else
    echo "D";


   
$num = 9;
$city = "Beijing";
printf("There are %u million bicycles in %s.", $num, $city);

