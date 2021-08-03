<?php
$input = file("test.txt");
foreach ($input as $inputRow){

    $rowInputValues = (explode(' ',explode(';', $inputRow)[0]));
    $inputSum = array_sum($rowInputValues);
    $inputCount = count($rowInputValues);
    $rowResults = (explode(' ',explode(';', $inputRow)[1]));
   
   if((intdiv($inputSum,$inputCount) == $rowResults[0]) AND ($inputSum % $inputCount == $rowResults[1])){
       echo $inputRow.": TRUE \n";
    }
    else {
        echo $inputRow.": FALSE \n";
    }    

}

