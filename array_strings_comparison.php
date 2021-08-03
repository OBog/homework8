<?php
/* Задача: Даны два массива строк. Написать функцию, которая, сравнивая между собой первые, вторые, третьи элементы массивов (строки) 
и считая разницу длин по модулю (разница всегда положительна), высчитает макисмальную разницу и вернет ее */

$a1=array("Horseeee","Doggy","Cat");
$a2=array("Cow","Dog","Rat");
$max =[];

function arrayComparison($string1,$string2) {
    $max = 0;
    $difference = abs(strlen($string1) - strlen($string2));
    //echo $difference;
    return $difference;
    }

    


$max = (array_map("arrayComparison",$a1,$a2));


//var_dump(arrayComparison($a1,$a2));

echo "Maximum difference between str length is: ".max($max)."\n";
