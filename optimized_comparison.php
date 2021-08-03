<?php
/* Задача: Даны два массива строк. Написать функцию, которая, сравнивая между собой первые, вторые, третьи элементы массивов (строки) 
и считая разницу длин по модулю (разница всегда положительна), высчитает макисмальную разницу и вернет ее */

$a1=array("Horseeee","Doggy","Cat","Cat");
//$a1=array("Horseeee","Doggy","Cat");
$a2=array("Cow","Dog","Rat");
//$a2=array();

try {
    
   if (count($a1) == 0 OR count($a2) == 0){                         // check if both arrays have data
    throw new Exception('Arrays is empty');                 // if at least one of the arrays doesn't have data, create exception
    }

   if(count($a1) != count($a2)){
        throw new Exception('Arrays are of a different length');  
     }                                                              // check if both arrays are of the same length
} catch (\Exception $e) {                                           // catch the Exception
    var_dump($e->getMessage());                                     // print the Exception
    
} finally { 
}

function arrayComparison($string1,$string2) {                       // funtion to compare the lengths of array string elements
    return abs(strlen($string1) - strlen($string2));           // return absolute value: difference of lengths for each array's element.
}
echo "Maximum difference between str length is: ".max(array_map("arrayComparison",$a1,$a2))."\n";   // echo maximum difference of lengths for array's elements.
