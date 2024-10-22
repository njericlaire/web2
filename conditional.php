<?php
// for($i=21;$i<=100;$i++){
//     if ($i%5==0)
//     echo $i." to the power of 2 is ".($i**2)."<br> ";
// }

$i=$_POST['num1'];
$j=$_POST['num2'];

for($j;$j>=$i;$j--){
    
    echo $j."<br> ";
}

?>