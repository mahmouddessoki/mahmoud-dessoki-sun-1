<?php
    //problem 7
    $x = 3; 
    $y=$x++; //in this line y = 3;
    $y+= ++$x; //in this line y = y+(++x)=3+4=7;
    
    if ($y == 7) { //true condition
        $x++; 
        echo $x ."<br>"; // x become 4
    }
    else if ($y == 8) {
        $x--;
        echo $x ."<br>";
    }
    else if ($y == 9) {
        $x+=2;
        echo $x ."<br>";
    }
    else { 
        $x= 0;
        echo $x ."<br>"; 
    }


?>