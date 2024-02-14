<?php

/* 
-Variabke making
 Data type will be maintained on run time not in compile time.

 i.e. using $sign
 */

$n1 = 10;
echo $n1;
echo "<hr>";


// Array in php
//  1. indexed array 
$arrStd = ["Your name", "info@gmail.com"];

/* Checking data of any array or any 
    -print_r();
    -var_dump();
*/
print_r($arrStd); //only data display
echo "<hr>";
var_dump($arrStd); //data with datatype
echo "<hr>";
echo $arrStd[0];  // we can't echo array , we need to provide index.
// We can concatinate in php by (.);
echo "<hr> Name of 0 index student is :" . $arrStd[0];
?>