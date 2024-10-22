 <?php
// $sum=0;
// for($i=1;$i<=1000;$i++)
// {
//     if ($i%25==0){
//         $sum +=$i;
        
//     }

// }
// echo "The sum is s". $sum . "<br>";

// for($i=1;$i<10;$i++){
//     echo "<p>";
//     //echo $i;
//     for ($j=1;$j<10;$j++){
        
//         echo $i*$j."  ";

//     }
// }

for ($i = 1; $i <= 5; $i++) {
    // Print the stars for each row
    for ($j = 5; $j >= $i; $j--) {
        echo "* ";
    }
    // Move to the next line after printing each row
    echo "<br>";
}

?> 