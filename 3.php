<?php

     //problem3
    /**
    * outer for indicat number of rows
    * first inner for to print normal triangle
    * second inner four to print reverse of first inner 
    */
    $x = 1;
    for ($i=1; $i <= 10; $i++) {
        if($i <= 5) {
            for ($j=1; $j <= $i; $j++) { 
                echo "* ";
            }
            
        }else {
            for ($j=$i-$x; $j >= 1; $j--) { 
                echo "* ";
            }
            $x += 2;
        }
        echo "<br><br>"; 
    }
    echo "<hr>";

?>