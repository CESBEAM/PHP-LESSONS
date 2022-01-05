<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo (4 + 5) * 10 ," - Add will be first priority 'cuz of '()' sign <br>";
    echo 4 + 5 * 10 ," - MDAS should be follow";
    
    $num1 = 10;
    $num1++;
    
    $num1 += 10;
    $num1--;

    echo $num1,"<br>";

    echo "Biggest: ",max(10,5),"<br>";
    echo "Smallest: ",min(12,20),"<br>";

    echo 4^2,"<br>";
    echo exp(2),"<br>";
    echo sqrt(100),"<br>";
    echo round(3.5),"<br>";

    ?>
</body>
</html>