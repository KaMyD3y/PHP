<?php
// PHP Taskbook Level 1.2
// №1
// Given a number, output the first digit of this number to the console.
$number = 45;
while($number >= 10){
    $number = (int)($number / 10);
}
echo "$number \n";
$number = 45234;
echo strval($number)[0];
echo ((string)$number)[0];
$number = 45234;
$array = str_split($number); // better mb_str_split
echo (int)((string)$number)[0];
echo ".$array[0] \n";
foreach($array as $key => $value){
    if($key == 0){
        echo $value;
    }
}

// №2
// Given a number, output the last digit of this number to the console.
$number = 43;
$string = strval($number);
echo "\n";
echo $string;
echo "\n";
echo mb_substr($string,-1);
echo "\n";

$number = 23423;
$array = str_split($number);
echo end($array);
echo "\n";
$lastElement = $array[count($array)-1];
echo $lastElement;
echo "\n";
echo $number % 10;
echo "\n";
echo str_split($number)[count(str_split($number)) - 1];
echo "\n";
$lastKey = array_key_last($array);
foreach ($array as $key => $value){
    if($key == $lastKey ){
        echo $value;
    }
}

// №3
// Given a number, output to the console the sum of the first and last digits of this number.

// №4

// Given a number. Output the number of digits in this number.

// №5

// You are given two numbers. Check that the first digits of these numbers match.

?>