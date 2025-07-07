<?
// PHP taskbook by levels
// Level 1.3
// №1

// Given a string, if there is more than one character in the string, print the second to last character of the string to the console.
$char = "asddfasd";
if(mb_strlen($char) > 1){
    echo substr($char,mb_strlen($char) - 2,-1);
    echo "\n";
}
if(mb_strlen($char) > 1){
    echo substr($char,-2,1);
    echo "\n";
}
$char = "asddfasd";
if(mb_strlen($char) > 0){
    // here array
    $chars = preg_split('//u',$char , -1, PREG_SPLIT_NO_EMPTY);
    echo $chars[count($chars) - 2];
    echo "\n";
    foreach ($chars as $char){
        echo $char;
    }
}
// №2

// Given two integers, check that the first number is divisible by the second without remainder.
$number1 = 40;
$number2 = 4;
if($number2 != 0 && $number1 % $number2 == 0){
    echo "$number1 is divisible by $number2 without a remainder.";
    echo "\n";
}else{
    echo "$number1 is not divisible by $number2 without a remainder.";
    echo "\n";
}
$numbers = [40,4];
foreach($numbers as $num){
    echo $num;
    echo "\n";
}
echo $numbers[1] . " sad";
echo "\n"; 
if($numbers[1] != 0 && $numbers[0] % $numbers[1] == 0){
    echo "$number1 is divisible by $number2 without a remainder.";
    echo "\n";  
}
?>