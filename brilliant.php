<?php

echo "Enter how many asterisks you wish to have in the middle \n";

$handle = fopen ("php://stdin","r");
$ast = fgets($handle);
$half = $ast/2;
if ($ast<=0 OR $ast%2==0){
    print "Enter positive odd number\n";
}
else {
    for ($i = 1; $i <= $ast; $i+=2) {
        $spaces =  floor($ast - $i/2);
        //echo "spaces: ".$spaces;
        echo str_repeat(' ', $spaces) . str_repeat('*', $i) . PHP_EOL;
    };
    for ($j = $ast-2; $j > 0; $j-=2) {
        $spaces =  floor($ast - $j/2);
        //echo "spaces: ".$spaces;
        echo str_repeat(' ', $spaces) . str_repeat('*', $j) . PHP_EOL;
    };

}

