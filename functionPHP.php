<?php 

function francisBeam(){
    return "Hi";
}

function sum($x,$y){
    return $x+$y;
}

function manga($color, $size){

    if(strtolower($color) == "yellow" AND strtolower($size) == "big"){
        return "This is Mango now";
    }else{
        return "mango is not ready yet";
    }
}


// echo francisBeam();
// echo "<br>";
// echo sum(5,5);
// echo "<br/>";
// echo manga("Yellow", "Big");