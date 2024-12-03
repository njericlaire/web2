<?php 
     echo "<u>foreach loop result with associative array key </u><br>"; 
     $FriendList = array ("Friend1" => "Kibet","Friend2"=>"Reyhan", "Friend3"=>"Risper", "Friend4"=>  
                                      "Cherryl", "Friend5"=>"Clinton"); 
    foreach ( $FriendList as $key=> $value ) 
    { 
     echo "$key , $value<br />"; 
    }  
?>