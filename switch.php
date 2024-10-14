<?php
$num1=1;
// switch($num1){
//     case 1:
//         echo "This is number 1";
//         break;
//     case 2:
//         echo "This is number 2";
//         break;
//     case 3:
//         echo "This is number 3";
//         break;
//     default:
//         echo "You do not have a number";
    

// }


if ($num1==1){
    echo "This is number 1";
}
elseif($num1==2){
    echo "This is number 2";
}
elseif($num1==3){
    echo "This is number 3";
}
else{
    echo "You do not have a number";
}
echo "<br>";
$avg=60;
switch($avg){
    case ($avg>=80):
        echo "A";
        break;
    case ($avg>=70):
        echo "B";
        break;
    case ($avg>=60):
        echo "C";
        break;
    default:
        echo "D";
    
}

$age=8;
$res=$age>=18?"Adult":"Kid";
echo "<br>";
echo $res;

?>