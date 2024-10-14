<?php
$math= $_POST['math'];
$english= $_POST['eng'];
$swa= $_POST['swa'];
$bio= $_POST['bio'];
$chem= $_POST['chem'];

$avg=($math+$english+$swa+$bio+$chem)/5;

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
?>