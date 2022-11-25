<?php 
//Reggie Mendoza
//BSIT 4

//PHP Variables
$firstname = "Reggie";

echo "<br>";
//PHP Echo
$a = "True";
$b = "False";

echo "<br>";
echo $a;
echo "<br>";
echo $b;


echo "<br>";
//PHP Data Types
$year = 2022;
var_dump($year);
echo "<br>";
$price = 69.69;
var_dump($price);
echo "<br>";
$answer = True;
var_dump($answer);


echo "<br>";
//PHP Strings
echo str_word_count("I Love ULS");


echo "<br>";
//PHP Numbers


echo "<br>";
//PHP Math
echo 8 + 8;
echo "<br>";
echo 8 - 8;
echo "<br>";
echo 8 * 8;
echo "<br>";
echo 8 / 8;


echo "<br>";
//PHP Constants
define("GREETING", "Welcome to Mobile Legends!");
echo GREETING;

echo "<br>";
//PHP Operators
echo 8 + 8;
echo "<br>";
echo 8 - 8;
echo "<br>";
echo 8 * 8;
echo "<br>";
echo 8 / 8;
echo "<br>";
echo 8 % 8;

echo "<br>";
//PHP If else if
$username = "Redge";
$password = "password";
if ($username !="Redge") {
    echo "Wrong username";
}
elseif ($password !="Password") {
    echo "Wrong password";
}
else {
    echo "Successful login";
}

echo "<br>";
//PHP Switch
$var = "b";
switch ($var){
    case 'a':
        echo "Cake";
        break;
    case 'b':
        echo "Creampie";
        break;
    case 'c':
        echo "Ice cream";
        break;
    default:
    echo "Dessert not Available";
        break;
}


echo "<br>";
//PHP Loops
for ($i=0; $i<=20; $i++){
    echo $i;    
}


echo "<br>";
//PHP Functions
function Message($name)
{
    echo $name;
}
message('Mendoza')
?>