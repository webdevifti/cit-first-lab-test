<?php

// Test One
echo "<h3>Test Number One</h3>";
$test = 56;
echo "Your Value is: ".$test;


echo "<br>";
// Test Two
echo "<h3>Test Number Two</h3>";
$text = "Bangladesh!";
echo strrev($text);

// Test Three
echo "<br>";
echo "<h3>Test Number Three</h3>";
$word = "Hello Bangladesh";
echo str_replace("Bangladesh", "CIT!", $word);


// Test Number Four
echo "<br>";
echo "<h3>Test Number Four</h3>";
define('PI_VALUE',3.1416);
echo "Consonant value of PI is: ".PI_VALUE;



// Test Five
echo "<br>";
echo "<h3>Test Number Five</h3>";
$value1 = 54;
$value2 = 38;

$add = $value1 + $value2;
echo "Addition of two values: ".'('.$add.')';
$multiply = $value1 * $value2;
echo "<br>";
echo "Multiplication of two values: "."#".$multiply."#";

$division = $value1 / $value2;
echo "<br>";
echo "Division of two values: ".$division;

$substract = $value1 - $value2;
echo "<br>";
echo "Substraction of two values: "."$".$substract;

// $exponent = $value1 ** $value2;
// echo "<br>";
// echo "Exponent of two values: ".$exponent;

// Test Six
echo "<br>";
echo "<h3>Test Number Six</h3>";

$num1 = 43;
$num2 = 5;

$remainder = $num1 % $num2;
echo "Remainder is: ".$remainder;

// Test Seven
echo "<br>";
echo "<h3>Test Number Seven</h3>";

$gender = 'Male';
if($gender === 'Male'){
    echo "You are a Male";
}else{
    echo "You are a Female";
}


// Test Eight

echo "<br>";
echo "<h3>Test Number Eight</h3>";

$v = 38;
if($v % 2 == 0){
    echo $v." is even";
}else{
    echo $v." is odd";
}


// Test Nine

echo "<br>";
echo "<h3>Test Number Nine</h3>";

$n = 1;
while($n <= 10){
    echo $n."#";
    $n++;
}

// Test Ten

echo "<br>";
echo "<h3>Test Number Ten</h3>";

$letter = "p";

switch($letter){
    case "a":
        echo "Your input is a vowel";
        break;
    case "A":
        echo "Your input is a vowel";
        break;
    case "e":
        echo "Your input is a vowel";
        break;
    case "E":
        echo "Your input is a vowel";
        break;
    case "i":
        echo "Your input is a vowel";
        break;
    case "I":
        echo "Your input is a vowel";
        break;
    case "o":
        echo "Your input is a vowel";
        break;
    case "O":
        echo "Your input is a vowel";
        break;
    case "u":
        echo "Your input is a vowel";
        break;
    case "U":
        echo "Your input is a vowel";
        break;
    default:
    echo "Your input is a consonant";
       break;
    
}



// Test Eleven

echo "<br>";
echo "<h3>Test Number Eleven</h3>";

for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        echo $i."@";
    }
}

// Test Twelve
echo "<br>";
echo "<h3>Test Number Twelve</h3>";
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 1){
        echo $i."<br>";
    }
}

// Test Thirteen
echo "<br>";
echo "<h3>Test Number Thirteen</h3>";

$j = 1;
for($i = 1; $i <= 10; $i++){
    $r = $j*$i;
    echo $i." X ".$i." = ".$r."<br>"; 
    // for($j = 1;$j <= $i; $j++){
    //     echo $i." X ".$j." = ".$i*$j."<br>";
    // }
}

// Test Fourteen
echo "<br>";
echo "<h3>Test Number Fourteen</h3>";

function check_number($number){

    if($number < 30 && $number > 20 && $number > 10){
        echo $number." is less than 30"."<br>";
        echo $number." is greater than 20"."<br>";
        echo $number." is greater than 10"."<br>";
    }

}
echo check_number(25);


if(false){
    echo "I LOve you guys";
}else{
    return false;
}

?>