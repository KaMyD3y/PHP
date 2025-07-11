<?php
// PHP taskbook by levels
// Level 1


// №1
// Given a number. Check if it is negative or not. Output this information to the console.
$num = 4;
if($num < 0) {
    echo "Negative \n";
}else{
    echo "Positive  \t";
}


// №2
// Given a string, output the length of this string to the console.
$string = "asddsghskldhfjasdkhasd";
echo mb_strlen($string);


$string = "asddsgffdhasdhASDADS";
$lower = mb_strtolower($string);
echo $lower . "\n";
echo mb_strlen($lower),"\n";


// №3
// Given a string, print the last character of the string to the console.
$string = "blablaoue";
echo $string[mb_strlen($string)-1];

$string = "blablaoue";
for($i = 0; $i < mb_strlen($string);$i++){
    if($i == mb_strlen($string)-1){
        echo $string[$i];
    }
}
echo mb_substr($string,mb_strlen($string)-1,1);


// №4
// Given a number, check whether it is even or not.
$number = 3;
if($number % 2 == 0){
    echo "Even";
}else{
    echo "odd";
}
//here is array
$number = [2,3,4,6,7];
foreach( $number as $key => $num  ){
    echo "$key => $num \t";
    if($num % 2 == 0){
        echo "Even";
    }else{
        echo "odd";
    }
}
// №5
// You are given two words. Check that the first letters of these words match.
$array = ["Blabla","Blala"];
if($array[0][0] == $array[1][0]){
    echo "First letters match!";
} else {
    echo "First letters do NOT match.";
}
//here for
$firstLetters = [];
foreach($array as $word){
    $firstLetters[] = $word[0];
}
if(count($firstLetters) === 2 && $firstLetters[0] == $firstLetters[1] ){
    echo "First letters match!";
} else {
    echo "First letters do NOT match.";
}
//this simple
if(substr($array[0],0,1) === substr($array[1],0,1)){
    echo "First letters match!";
}



// №6

//Given a word. Get its last letter. If the word ends with the letter "e", return the second-to-last letter instead.
$string = "name";
$getletter = substr($string , mb_strlen($string)-1 , 1);
if($getletter == 'e' || $getletter == 'E'){
    $getletter = substr($string , mb_strlen($string)-2 , 1);
}
echo $getletter;
?>