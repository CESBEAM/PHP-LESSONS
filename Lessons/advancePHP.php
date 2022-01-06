<?php
 
//start line
$fruits = array("fresh"=>"mango", "snow"=>"apple","vanilla"=>"banana");
$total = count($fruits);

for($x=0; $x<$total; $x++){
    echo $fruits[$x]. "</br>";
}
print_r($fruits);

// echo $fruits['fresh'];

//new line
echo"<br><br>";

$fruits = array("mango", "apple","banana");
$total = count($fruits);

echo"Fruits are: ".$total;


//new line
echo"<br><br>";
$numbers = array(1,2,3,4,5,6,7,8,9,10);

print_r($numbers);


//sort
echo"<br><br>";
$numbers = array(10,7,9,8,5,4,2,1,3,6);
sort($numbers);
print_r($numbers);

//reverse sort
echo"<br><br>";
$numbers = array(1,2,3,4,5,6,7,8,9,10);
rsort($numbers);
print_r($numbers);


//search array
echo"<br><br>";
if(in_array("mango",$fruits)){
    echo "mango is here";
}else{
    echo"no mango here";
}