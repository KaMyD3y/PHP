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
$number = 43534;
$array = str_split($number);
$lastElement = array_key_last($array);
$firstElement = array_key_first($array);
echo $lastElement;
echo "\n";
echo $firstElement;
echo "\n";
foreach($array as $key => $value){
    if($key == $firstElement){
        $first = (int)$value;
    }elseif ($key == $lastElement){
        $last = (int)$value;
    }
}
echo $first + $last;
echo "\n";

$number = 234234;
$string = strval($number);
$stringOther = (string)$number;
echo $string;
echo "\n";
echo $stringOther;
echo "\n";
$firstElement = mb_substr($string,0,1);
echo $firstElement;
echo "\n";
$lastElement = mb_substr($string,-1,1);
echo $lastElement;
echo "\n";
echo $firstElement + $lastElement;
echo "\n";
// №4
// Given a number. Output the number of digits in this number.
$numbers = 3453452342;
echo strlen((string)$numbers);
echo "\n";
echo count(str_split($numbers));
echo "\n";


$array = str_split($numbers);
$count = count($array);
echo $count;
echo "\n";
$lastKey = array_key_last($array);
echo $lastKey;
echo "\n";
$len = 0;
foreach($array as $key => $value){
    if($key != $lastKey + 1){
        $len++;
    }
}
echo "$len here";
echo "\n";
for($i = 1; $i <= count($array) - 1;$i++){
    if($lastKey == $i){
        echo $i+1;
    }
    
}
// №5

// You are given two numbers. Check that the first digits of these numbers match.

$number1 = 34;
$number2 = 35;
$string = strval($number1);
$string1 = strval($number2);
echo $string;
echo "\n";
echo $string1;
echo "\n";
echo mb_substr($string,0,-1);
echo "\n";
echo mb_substr($string1,0,-1);
echo "\n";
if(mb_substr($string,0,1) == mb_substr($string1, 0 ,1)){
    echo "Egual";
    echo "\n";
}
$number1 = 34;
$number2 = 35;
$array = str_split($number1);
$array1 = str_split($number2);
foreach($array as $numbers){
    echo $numbers;
    echo "\n";
}
foreach($array1 as $numbers){
    echo $numbers;
    echo "\n";
}
if($array[0] == $array1[0]){
    echo "Egual";
    echo "\n";
}
$array = [34,35];
$firstDigit = [];
foreach($array as $key => $value){
    $firstDigit[] = str_split($value)[0];
}
foreach($firstDigit as $numbers){
    echo $numbers;
    echo "\n";
}
echo "\n";
if($firstDigit[0] == $firstDigit[1]){
    echo "egual";
}



?>