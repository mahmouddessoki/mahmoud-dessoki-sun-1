<?php
    //problem2
    /**
    * we create assciative array with key is number
    * and value is equilvant english
    * then using foreach to check
    *  wheather the number exists or not
    * if exist print equilvant english
    * else hint the user to give number from 0 to 9 
    */
    $number = 10;
    $numberInEngilsh = "";
    $EquilvantEnglish = [
        0 => "zero",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
    ];
    foreach ($EquilvantEnglish as $key => $value) {
        if ($key == $number) {
            $numberInEngilsh = $value;
        }
    }
    if ($numberInEngilsh != "") {
        echo "the engish of the number is : $numberInEngilsh <hr>";
    }else {
        echo "the number is not exist between 0 and 9 <hr>";
    }



?>