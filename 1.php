<?php
    
    /**
    * 1.define two variables $max and $min 
    * 2.assign them to first element 
    * 3.forLoop to compare each elemnt in the array
    * 4. if lower than min then refresh min 
    * 5.if higher than max then refresh max
    * 6.print max and min 
    */
    $numbers = [-1,20,3,4,5];
    $max = $min = $numbers[0];
    for ($i=1; $i < count($numbers); $i++) { 
        if($numbers[$i] > $max) {
            $max = $numbers[$i];
        }elseif ($numbers[$i] < $min) {
            $min = $numbers[$i];
        }
    }
    echo "max number is = $max and min number is = $min <hr>";
    

   

?>