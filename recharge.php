<?php
// a simple program to generate 20 digit recharge pin
function recharge($amount, $pin){
  for($count=1; $count<= $amount; $count++){
    for($x=1; $x<=$pin; $x++){
        $result = random_int(0, 9);
        echo $result;
    }
    echo "<br/>";
    
  }  
}

echo recharge(10,20);
?>