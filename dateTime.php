<?php

date_default_timezone_set('Asia/Manila');
echo "<br/>";
$date = 'January 05, 2022 07:16:00 PM';
echo $date;
echo "<br>";
echo date('m/d/y <br/>H:i:s a',strtotime($date));