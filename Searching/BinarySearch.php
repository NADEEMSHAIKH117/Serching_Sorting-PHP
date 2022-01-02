<?php
/**
 * Author -> Nadeem Shaikh
 * PHP Version -> 8.0.9
 * Class to Compute Linear Search Problem
 */
class BinarySearch
{
    function binarySearch(Array $arr, $x)
    {
        //check for empty array
        if (count($arr) ===0)
        return false;
        $low=0;
        $high= count($arr)-1;

        while ($low <= $high) {
            //compute middle index
            $mid = floor(($low + $high)/2);

            //element found at mid
            if($arr[$mid] == $x){
                return $mid;
            }
            if ($x < $arr[$mid]){
                //search the left side of the array
                $high = $mid-1;
            }
            else{
                //search the right side of the array
                $low = $mid + 1;
            }
        }
        return false;
    }
}
$binary = new BinarySearch();
$arr = array(2,4,8,10,12,14,16,18,20);
$value =18;
if ($binary->binarySearch($arr,$value)==true){
    echo "element ".$value." Exits in the Array";
}
else {
    echo $value."Doesnt Exits";
}