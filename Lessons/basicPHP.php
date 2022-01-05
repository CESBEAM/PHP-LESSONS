<?php 

//variable
$string1 = "hello";
$string2 = "hi";
echo $string1," ",$string2;

$num1 = 1;
$num2 = 4;
echo "</br>Total of sum is: ", $num1 + $num2;


echo "</br></br>";



//data types
$text="hello";
$number=19;
$float = 82.2;
$boolean = true;
// $array = array("apple","banana","mango",21,2,4,6);
$array = array($text,$number,$float,$boolean);


var_dump($array);

echo "</br></br>";

//strings
$text1="Hello world";
echo $text1." ".$number;
echo "</br>";
echo strlen($text1);
echo "</br>";
$old = str_replace("Hel","Mel",$text1);
echo "</br>";
echo strlen($old);
echo "</br>";
echo strpos($text1,"world");



//constants
define("Master","FrancisBeam");

echo "</br>";
echo Master;



//Operators
$num1 = 3;
$num2 = 10;
$num1 += $num2;
echo "</br></br>";
// echo $num1 + $num2;
echo $num1;


//assigned operators
$sum1 = 60;
$sum2 = 40;
echo "</br> </br>";
echo $sum1 += $sum2;



//ifelse statements
echo "</br></br>";
$age = 19;
if($age>18){
    echo"welcome to the club";
}else{
    echo"eat rice";
}

echo "</br></br>";
$var1 = 44;
$var2 = 3;

if($var1 != $var2){
    echo"the number is equal";
}else{
    echo"the number is not equal";
}



//logical operators
echo "</br></br>";
$mango = "yellow";
$size = "big";

if($mango == "yellow" AND $size == "big"){
    echo"2 objects are match";
}else{
    echo"No, they are different";
}

echo "</br></br>";
if($mango == "yellow" OR $size == "big"){
    echo"2 objects are match";
}else{
    echo"No, they are different";
}


//switch statements
echo "</br></br>";
$selection = 5;

switch($selection){
    case "blue":
        echo"level 1";
        break;
        case 2:
            echo"level 2";
            break;
            case 3:
                echo"level 3";
                break;
                case 4:
                    echo"level 4";
                    break;
                    case 5:
                        echo"level 5";
                        break;

                        default:
                        echo"dont know";

}

//loop
$x=10;
$y=0;
echo "</br></br>";

while($y<=10){
    echo"start number of ".$x. "<br>";
    $y++;
}


echo "</br></br>";
do{
    echo "gawin mo ".$y."<br>";
    $y++;
}while($y <=10);


echo "</br></br>";
for($i=0; $i <=10; $i++){
    echo "the number index is ".$i."<br>";
}