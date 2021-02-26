<?php
    

    $inputArr = ["a","b","c","d","a","b"];
    //empty array to get the non-duplicated array
    $outputArray = [];
    //pushing the first element of the input array in the outputArr
    $outputArr[] = $inputArr[0];
    /**
     * the below for will validate whether the element exists in the
     * output array or not then chenge the flage after that depending
     * on the flag value we will decide wheather take the element to outputArr
     * or not.
     */

    for ($i=1; $i < count($inputArr); $i++) { 
        $flag = false;
        for ($j=0; $j < count($outputArr); $j++) { 
            if($outputArr[$j] === $inputArr [$i]) {
                $flag = true;
            }
        }
        if ($flag == false) {
            $outputArr[] = $inputArr[$i];
        }
    }

    print_r($outputArr);
    


?>