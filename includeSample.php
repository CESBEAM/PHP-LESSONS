<?php

// include_once("functionPHP.php");



// echo francisBeam();
// echo "<br>";
// echo sum(5,5);
// echo "<br/>";
// echo manga("yellow", "big");


include_once("classPHP.php");

$human = new person;
$human ->set_name("Pedro");

echo $human->get_name();