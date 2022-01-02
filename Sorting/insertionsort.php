<?php
/**
 * Author -> Nadeem Shaikh
 * PHP Version -> 8.0.9
 * Class to Compute Insertion Sort Problem
 */
class Sorting{

    /**
     * Function for Displaying the Elements of the array
     * Passing 'array' as parameter
     * Printing the array
     */
    function display($sort)
    {
        for ($i = 0; $i < count($sort); $i++) {
            echo $sort[$i] . " ";
        }
    }
    
    /**
     * Function to sort elements by swapping
     * passing array as the parameter
     * returns the sorted array
     */
    function insertionSort($insArr)
    {
        for ($i=1; $i < count($insArr); $i++) { 
            $j = $i;
            while ($j > 0 && $insArr[$j-1] > $insArr[$j]) {
                $temp = $insArr[$j];
                $insArr[$j] = $insArr[$j-1];
                $insArr[$j - 1] = $temp;
                $j--;
            }
        }
        return $insArr;
    }
}
$insertionArray = new Sorting();

$insArr = array(99,55,66,77,22,33);
echo "original Array : \n";
$insertionArray->display($insArr);

echo "\nSorted Array\n";
$sortedArray = $insertionArray->insertionSort($insArr);
$insertionArray->display($sortedArray);

?>